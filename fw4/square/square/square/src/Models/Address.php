<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Represents a physical address.
 */
class Address implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $addressLine1;

    /**
     * @var string|null
     */
    private $addressLine2;

    /**
     * @var string|null
     */
    private $addressLine3;

    /**
     * @var string|null
     */
    private $locality;

    /**
     * @var string|null
     */
    private $sublocality;

    /**
     * @var string|null
     */
    private $sublocality2;

    /**
     * @var string|null
     */
    private $sublocality3;

    /**
     * @var string|null
     */
    private $administrativeDistrictLevel1;

    /**
     * @var string|null
     */
    private $administrativeDistrictLevel2;

    /**
     * @var string|null
     */
    private $administrativeDistrictLevel3;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $organization;

    /**
     * Returns Address Line 1.
     *
     * The first line of the address.
     *
     * Fields that start with `address_line` provide the address's most specific
     * details, like street number, street name, and building name. They do *not*
     * provide less specific details like city, state/province, or country (these
     * details are provided in other fields).
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     *
     * The first line of the address.
     *
     * Fields that start with `address_line` provide the address's most specific
     * details, like street number, street name, and building name. They do *not*
     * provide less specific details like city, state/province, or country (these
     * details are provided in other fields).
     *
     * @maps address_line_1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     *
     * The second line of the address, if any.
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Sets Address Line 2.
     *
     * The second line of the address, if any.
     *
     * @maps address_line_2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Returns Address Line 3.
     *
     * The third line of the address, if any.
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }

    /**
     * Sets Address Line 3.
     *
     * The third line of the address, if any.
     *
     * @maps address_line_3
     */
    public function setAddressLine3(?string $addressLine3): void
    {
        $this->addressLine3 = $addressLine3;
    }

    /**
     * Returns Locality.
     *
     * The city or town of the address.
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }

    /**
     * Sets Locality.
     *
     * The city or town of the address.
     *
     * @maps locality
     */
    public function setLocality(?string $locality): void
    {
        $this->locality = $locality;
    }

    /**
     * Returns Sublocality.
     *
     * A civil region within the address's `locality`, if any.
     */
    public function getSublocality(): ?string
    {
        return $this->sublocality;
    }

    /**
     * Sets Sublocality.
     *
     * A civil region within the address's `locality`, if any.
     *
     * @maps sublocality
     */
    public function setSublocality(?string $sublocality): void
    {
        $this->sublocality = $sublocality;
    }

    /**
     * Returns Sublocality 2.
     *
     * A civil region within the address's `sublocality`, if any.
     */
    public function getSublocality2(): ?string
    {
        return $this->sublocality2;
    }

    /**
     * Sets Sublocality 2.
     *
     * A civil region within the address's `sublocality`, if any.
     *
     * @maps sublocality_2
     */
    public function setSublocality2(?string $sublocality2): void
    {
        $this->sublocality2 = $sublocality2;
    }

    /**
     * Returns Sublocality 3.
     *
     * A civil region within the address's `sublocality_2`, if any.
     */
    public function getSublocality3(): ?string
    {
        return $this->sublocality3;
    }

    /**
     * Sets Sublocality 3.
     *
     * A civil region within the address's `sublocality_2`, if any.
     *
     * @maps sublocality_3
     */
    public function setSublocality3(?string $sublocality3): void
    {
        $this->sublocality3 = $sublocality3;
    }

    /**
     * Returns Administrative District Level 1.
     *
     * A civil entity within the address's country. In the US, this
     * is the state.
     */
    public function getAdministrativeDistrictLevel1(): ?string
    {
        return $this->administrativeDistrictLevel1;
    }

    /**
     * Sets Administrative District Level 1.
     *
     * A civil entity within the address's country. In the US, this
     * is the state.
     *
     * @maps administrative_district_level_1
     */
    public function setAdministrativeDistrictLevel1(?string $administrativeDistrictLevel1): void
    {
        $this->administrativeDistrictLevel1 = $administrativeDistrictLevel1;
    }

    /**
     * Returns Administrative District Level 2.
     *
     * A civil entity within the address's `administrative_district_level_1`.
     * In the US, this is the county.
     */
    public function getAdministrativeDistrictLevel2(): ?string
    {
        return $this->administrativeDistrictLevel2;
    }

    /**
     * Sets Administrative District Level 2.
     *
     * A civil entity within the address's `administrative_district_level_1`.
     * In the US, this is the county.
     *
     * @maps administrative_district_level_2
     */
    public function setAdministrativeDistrictLevel2(?string $administrativeDistrictLevel2): void
    {
        $this->administrativeDistrictLevel2 = $administrativeDistrictLevel2;
    }

    /**
     * Returns Administrative District Level 3.
     *
     * A civil entity within the address's `administrative_district_level_2`,
     * if any.
     */
    public function getAdministrativeDistrictLevel3(): ?string
    {
        return $this->administrativeDistrictLevel3;
    }

    /**
     * Sets Administrative District Level 3.
     *
     * A civil entity within the address's `administrative_district_level_2`,
     * if any.
     *
     * @maps administrative_district_level_3
     */
    public function setAdministrativeDistrictLevel3(?string $administrativeDistrictLevel3): void
    {
        $this->administrativeDistrictLevel3 = $administrativeDistrictLevel3;
    }

    /**
     * Returns Postal Code.
     *
     * The address's postal code.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     *
     * The address's postal code.
     *
     * @maps postal_code
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns Country.
     *
     * Indicates the country associated with another entity, such as a business.
     * Values are in [ISO 3166-1-alpha-2 format](http://www.iso.org/iso/home/standards/country_codes.htm).
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * Indicates the country associated with another entity, such as a business.
     * Values are in [ISO 3166-1-alpha-2 format](http://www.iso.org/iso/home/standards/country_codes.htm).
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns First Name.
     *
     * Optional first name when it's representing recipient.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     *
     * Optional first name when it's representing recipient.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     *
     * Optional last name when it's representing recipient.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     *
     * Optional last name when it's representing recipient.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Organization.
     *
     * Optional organization name when it's representing recipient.
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    /**
     * Sets Organization.
     *
     * Optional organization name when it's representing recipient.
     *
     * @maps organization
     */
    public function setOrganization(?string $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['address_line_1']               = $this->addressLine1;
        $json['address_line_2']               = $this->addressLine2;
        $json['address_line_3']               = $this->addressLine3;
        $json['locality']                     = $this->locality;
        $json['sublocality']                  = $this->sublocality;
        $json['sublocality_2']                = $this->sublocality2;
        $json['sublocality_3']                = $this->sublocality3;
        $json['administrative_district_level_1'] = $this->administrativeDistrictLevel1;
        $json['administrative_district_level_2'] = $this->administrativeDistrictLevel2;
        $json['administrative_district_level_3'] = $this->administrativeDistrictLevel3;
        $json['postal_code']                  = $this->postalCode;
        $json['country']                      = $this->country;
        $json['first_name']                   = $this->firstName;
        $json['last_name']                    = $this->lastName;
        $json['organization']                 = $this->organization;

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateRootCACertificateRequest\tags;

class CreateRootCACertificateRequest extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $locality;

    /**
     * @var string
     */
    public $organization;

    /**
     * @var string
     */
    public $organizationUnit;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $years;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'clientToken' => 'ClientToken',
        'commonName' => 'CommonName',
        'countryCode' => 'CountryCode',
        'locality' => 'Locality',
        'organization' => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'resourceGroupId' => 'ResourceGroupId',
        'state' => 'State',
        'tags' => 'Tags',
        'years' => 'Years',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }

        if (null !== $this->locality) {
            $res['Locality'] = $this->locality;
        }

        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }

        if (null !== $this->organizationUnit) {
            $res['OrganizationUnit'] = $this->organizationUnit;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->years) {
            $res['Years'] = $this->years;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }

        if (isset($map['Locality'])) {
            $model->locality = $map['Locality'];
        }

        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }

        if (isset($map['OrganizationUnit'])) {
            $model->organizationUnit = $map['OrganizationUnit'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}

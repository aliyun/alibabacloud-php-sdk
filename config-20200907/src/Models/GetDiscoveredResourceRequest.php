<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class GetDiscoveredResourceRequest extends Model
{
    /**
     * @var int
     */
    public $complianceOption;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'complianceOption' => 'ComplianceOption',
        'region'           => 'Region',
        'resourceId'       => 'ResourceId',
        'resourceType'     => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceOption) {
            $res['ComplianceOption'] = $this->complianceOption;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ComplianceOption'])) {
            $model->complianceOption = $map['ComplianceOption'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}

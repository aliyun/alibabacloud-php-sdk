<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateSiteRequest extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $coverage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $siteName;
    protected $_name = [
        'accessType' => 'AccessType',
        'coverage' => 'Coverage',
        'instanceId' => 'InstanceId',
        'resourceGroupId' => 'ResourceGroupId',
        'siteName' => 'SiteName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}

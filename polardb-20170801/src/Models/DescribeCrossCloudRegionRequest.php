<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeCrossCloudRegionRequest extends Model
{
    /**
     * @var string
     */
    public $cloudProvider;

    /**
     * @var string
     */
    public $crossCloudRegionId;

    /**
     * @var string
     */
    public $DBType;
    protected $_name = [
        'cloudProvider' => 'CloudProvider',
        'crossCloudRegionId' => 'CrossCloudRegionId',
        'DBType' => 'DBType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudProvider) {
            $res['CloudProvider'] = $this->cloudProvider;
        }

        if (null !== $this->crossCloudRegionId) {
            $res['CrossCloudRegionId'] = $this->crossCloudRegionId;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
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
        if (isset($map['CloudProvider'])) {
            $model->cloudProvider = $map['CloudProvider'];
        }

        if (isset($map['CrossCloudRegionId'])) {
            $model->crossCloudRegionId = $map['CrossCloudRegionId'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        return $model;
    }
}

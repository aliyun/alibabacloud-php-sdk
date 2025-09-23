<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeCrossCloudRegionMappingToAliyunRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunRegionId;

    /**
     * @var string
     */
    public $cloudProvider;

    /**
     * @var string
     */
    public $crossCloudRegionId;
    protected $_name = [
        'aliyunRegionId' => 'AliyunRegionId',
        'cloudProvider' => 'CloudProvider',
        'crossCloudRegionId' => 'CrossCloudRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunRegionId) {
            $res['AliyunRegionId'] = $this->aliyunRegionId;
        }

        if (null !== $this->cloudProvider) {
            $res['CloudProvider'] = $this->cloudProvider;
        }

        if (null !== $this->crossCloudRegionId) {
            $res['CrossCloudRegionId'] = $this->crossCloudRegionId;
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
        if (isset($map['AliyunRegionId'])) {
            $model->aliyunRegionId = $map['AliyunRegionId'];
        }

        if (isset($map['CloudProvider'])) {
            $model->cloudProvider = $map['CloudProvider'];
        }

        if (isset($map['CrossCloudRegionId'])) {
            $model->crossCloudRegionId = $map['CrossCloudRegionId'];
        }

        return $model;
    }
}

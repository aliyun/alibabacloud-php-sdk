<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class CreateSurveyJobRequest extends Model
{
    /**
     * @var string[]
     */
    public $region;

    /**
     * @var string[]
     */
    public $resourceTypeList;

    /**
     * @var string
     */
    public $ak;

    /**
     * @description 调研渠道
     *
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $cloudType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sk;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'region'           => 'Region',
        'resourceTypeList' => 'ResourceTypeList',
        'ak'               => 'ak',
        'channel'          => 'channel',
        'cloudType'        => 'cloudType',
        'name'             => 'name',
        'sk'               => 'sk',
        'tenantId'         => 'tenantId',
        'regionId'         => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceTypeList) {
            $res['ResourceTypeList'] = $this->resourceTypeList;
        }
        if (null !== $this->ak) {
            $res['ak'] = $this->ak;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->cloudType) {
            $res['cloudType'] = $this->cloudType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sk) {
            $res['sk'] = $this->sk;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSurveyJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = $map['Region'];
            }
        }
        if (isset($map['ResourceTypeList'])) {
            if (!empty($map['ResourceTypeList'])) {
                $model->resourceTypeList = $map['ResourceTypeList'];
            }
        }
        if (isset($map['ak'])) {
            $model->ak = $map['ak'];
        }
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['cloudType'])) {
            $model->cloudType = $map['cloudType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sk'])) {
            $model->sk = $map['sk'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}

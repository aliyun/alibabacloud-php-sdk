<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class CreateOnlineTestRequest extends Model
{
    /**
     * @example xxxxxxx
     *
     * @var string
     */
    public $dataId;

    /**
     * @example video
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example VideoModeration
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example https://xxxxxxxxxx.com/data/data.png
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'dataId' => 'DataId',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOnlineTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

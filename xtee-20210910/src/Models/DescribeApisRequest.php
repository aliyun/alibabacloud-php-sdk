<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $apiGroupId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $apiRegionId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang'        => 'Lang',
        'apiGroupId'  => 'apiGroupId',
        'apiRegionId' => 'apiRegionId',
        'apiType'     => 'apiType',
        'regId'       => 'regId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->apiGroupId) {
            $res['apiGroupId'] = $this->apiGroupId;
        }
        if (null !== $this->apiRegionId) {
            $res['apiRegionId'] = $this->apiRegionId;
        }
        if (null !== $this->apiType) {
            $res['apiType'] = $this->apiType;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['apiGroupId'])) {
            $model->apiGroupId = $map['apiGroupId'];
        }
        if (isset($map['apiRegionId'])) {
            $model->apiRegionId = $map['apiRegionId'];
        }
        if (isset($map['apiType'])) {
            $model->apiType = $map['apiType'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}

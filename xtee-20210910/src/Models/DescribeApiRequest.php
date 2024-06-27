<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiRequest extends Model
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
    public $apiId;

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
        'apiId'       => 'apiId',
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
        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
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
     * @return DescribeApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
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

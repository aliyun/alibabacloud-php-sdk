<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeApisRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $apiGroupId;

    /**
     * @var string
     */
    public $apiRegionId;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang' => 'Lang',
        'apiGroupId' => 'apiGroupId',
        'apiRegionId' => 'apiRegionId',
        'apiType' => 'apiType',
        'regId' => 'regId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

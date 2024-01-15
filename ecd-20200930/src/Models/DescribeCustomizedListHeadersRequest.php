<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomizedListHeadersRequest extends Model
{
    /**
     * @example zh-CN
     *
     * @var string
     */
    public $langType;

    /**
     * @example desktop
     *
     * @var string
     */
    public $listType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'langType' => 'LangType',
        'listType' => 'ListType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->langType) {
            $res['LangType'] = $this->langType;
        }
        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomizedListHeadersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LangType'])) {
            $model->langType = $map['LangType'];
        }
        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

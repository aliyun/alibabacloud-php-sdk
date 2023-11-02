<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeOperatorsRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example AGGREGATE
     *
     * @var string
     */
    public $sceneType;
    protected $_name = [
        'regionId'  => 'RegionId',
        'sceneType' => 'SceneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOperatorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        return $model;
    }
}

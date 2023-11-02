<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutomateResponseConfigFeatureRequest extends Model
{
    /**
     * @example event
     *
     * @var string
     */
    public $autoResponseType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoResponseType' => 'AutoResponseType',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoResponseType) {
            $res['AutoResponseType'] = $this->autoResponseType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutomateResponseConfigFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoResponseType'])) {
            $model->autoResponseType = $map['AutoResponseType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutomateResponseConfigPlayBooksRequest extends Model
{
    /**
     * @example event
     *
     * @var string
     */
    public $autoResponseType;

    /**
     * @example ip
     *
     * @var string
     */
    public $entityType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoResponseType' => 'AutoResponseType',
        'entityType'       => 'EntityType',
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
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutomateResponseConfigPlayBooksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoResponseType'])) {
            $model->autoResponseType = $map['AutoResponseType'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

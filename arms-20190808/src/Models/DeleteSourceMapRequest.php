<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteSourceMapRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $fidList;

    /**
     * @description This parameter is required.
     *
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fidList'  => 'FidList',
        'pid'      => 'Pid',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fidList) {
            $res['FidList'] = $this->fidList;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSourceMapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FidList'])) {
            if (!empty($map['FidList'])) {
                $model->fidList = $map['FidList'];
            }
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniRecoverableListResponseBody;

use AlibabaCloud\Tea\Model;

class recoverableInfoList extends Model
{
    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resetScn;

    /**
     * @var int
     */
    public $resetTime;

    /**
     * @var mixed[]
     */
    public $restoreInfo;
    protected $_name = [
        'firstTime'   => 'FirstTime',
        'lastTime'    => 'LastTime',
        'name'        => 'Name',
        'resetScn'    => 'ResetScn',
        'resetTime'   => 'ResetTime',
        'restoreInfo' => 'RestoreInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resetScn) {
            $res['ResetScn'] = $this->resetScn;
        }
        if (null !== $this->resetTime) {
            $res['ResetTime'] = $this->resetTime;
        }
        if (null !== $this->restoreInfo) {
            $res['RestoreInfo'] = $this->restoreInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoverableInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResetScn'])) {
            $model->resetScn = $map['ResetScn'];
        }
        if (isset($map['ResetTime'])) {
            $model->resetTime = $map['ResetTime'];
        }
        if (isset($map['RestoreInfo'])) {
            $model->restoreInfo = $map['RestoreInfo'];
        }

        return $model;
    }
}

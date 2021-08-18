<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniRecoverableListResponseBody;

use AlibabaCloud\Tea\Model;

class recoverableInfoList extends Model
{
    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var int
     */
    public $resetTime;

    /**
     * @var mixed[]
     */
    public $restoreInfo;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resetScn;
    protected $_name = [
        'lastTime'    => 'LastTime',
        'resetTime'   => 'ResetTime',
        'restoreInfo' => 'RestoreInfo',
        'firstTime'   => 'FirstTime',
        'name'        => 'Name',
        'resetScn'    => 'ResetScn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->resetTime) {
            $res['ResetTime'] = $this->resetTime;
        }
        if (null !== $this->restoreInfo) {
            $res['RestoreInfo'] = $this->restoreInfo;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resetScn) {
            $res['ResetScn'] = $this->resetScn;
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
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['ResetTime'])) {
            $model->resetTime = $map['ResetTime'];
        }
        if (isset($map['RestoreInfo'])) {
            $model->restoreInfo = $map['RestoreInfo'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResetScn'])) {
            $model->resetScn = $map['ResetScn'];
        }

        return $model;
    }
}

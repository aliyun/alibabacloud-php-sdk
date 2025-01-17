<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniRecoverableListResponseBody;

use AlibabaCloud\Dara\Model;

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
    public $resetScn;
    /**
     * @var int
     */
    public $resetTime;
    /**
     * @var string
     */
    public $restoreInfo;
    protected $_name = [
        'firstTime'   => 'FirstTime',
        'lastTime'    => 'LastTime',
        'resetScn'    => 'ResetScn',
        'resetTime'   => 'ResetTime',
        'restoreInfo' => 'RestoreInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
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

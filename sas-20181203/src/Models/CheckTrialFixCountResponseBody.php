<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CheckTrialFixCountResponseBody extends Model
{
    /**
     * @var bool
     */
    public $canFix;

    /**
     * @var int
     */
    public $expendCount;

    /**
     * @var int
     */
    public $remainCount;

    /**
     * @var int
     */
    public $repairedCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isTrial;
    protected $_name = [
        'canFix' => 'CanFix',
        'expendCount' => 'ExpendCount',
        'remainCount' => 'RemainCount',
        'repairedCount' => 'RepairedCount',
        'requestId' => 'RequestId',
        'isTrial' => 'isTrial',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canFix) {
            $res['CanFix'] = $this->canFix;
        }

        if (null !== $this->expendCount) {
            $res['ExpendCount'] = $this->expendCount;
        }

        if (null !== $this->remainCount) {
            $res['RemainCount'] = $this->remainCount;
        }

        if (null !== $this->repairedCount) {
            $res['RepairedCount'] = $this->repairedCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->isTrial) {
            $res['isTrial'] = $this->isTrial;
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
        if (isset($map['CanFix'])) {
            $model->canFix = $map['CanFix'];
        }

        if (isset($map['ExpendCount'])) {
            $model->expendCount = $map['ExpendCount'];
        }

        if (isset($map['RemainCount'])) {
            $model->remainCount = $map['RemainCount'];
        }

        if (isset($map['RepairedCount'])) {
            $model->repairedCount = $map['RepairedCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['isTrial'])) {
            $model->isTrial = $map['isTrial'];
        }

        return $model;
    }
}

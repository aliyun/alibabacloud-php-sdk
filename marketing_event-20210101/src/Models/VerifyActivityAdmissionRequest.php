<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class VerifyActivityAdmissionRequest extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $idCardNo;
    protected $_name = [
        'activityId' => 'ActivityId',
        'idCardNo' => 'IdCardNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->idCardNo) {
            $res['IdCardNo'] = $this->idCardNo;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['IdCardNo'])) {
            $model->idCardNo = $map['IdCardNo'];
        }

        return $model;
    }
}

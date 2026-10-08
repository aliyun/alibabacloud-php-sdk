<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class MosCheckInRequest extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $extParam;

    /**
     * @var string
     */
    public $qrCode;
    protected $_name = [
        'activityId' => 'ActivityId',
        'extParam' => 'ExtParam',
        'qrCode' => 'QrCode',
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

        if (null !== $this->extParam) {
            $res['ExtParam'] = $this->extParam;
        }

        if (null !== $this->qrCode) {
            $res['QrCode'] = $this->qrCode;
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

        if (isset($map['ExtParam'])) {
            $model->extParam = $map['ExtParam'];
        }

        if (isset($map['QrCode'])) {
            $model->qrCode = $map['QrCode'];
        }

        return $model;
    }
}

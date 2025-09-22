<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class SyncSignInInfoRequest extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $QRCode;
    protected $_name = [
        'activityId' => 'ActivityId',
        'QRCode' => 'QRCode',
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

        if (null !== $this->QRCode) {
            $res['QRCode'] = $this->QRCode;
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

        if (isset($map['QRCode'])) {
            $model->QRCode = $map['QRCode'];
        }

        return $model;
    }
}

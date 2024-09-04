<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class SyncSignInInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $activityId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $QRCode;
    protected $_name = [
        'activityId' => 'ActivityId',
        'QRCode'     => 'QRCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SyncSignInInfoRequest
     */
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

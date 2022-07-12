<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SendVerifyCodeRequest extends Model
{
    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $verifyCodeAction;
    protected $_name = [
        'extraInfo'        => 'ExtraInfo',
        'regionId'         => 'RegionId',
        'verifyCodeAction' => 'VerifyCodeAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->verifyCodeAction) {
            $res['VerifyCodeAction'] = $this->verifyCodeAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendVerifyCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VerifyCodeAction'])) {
            $model->verifyCodeAction = $map['VerifyCodeAction'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

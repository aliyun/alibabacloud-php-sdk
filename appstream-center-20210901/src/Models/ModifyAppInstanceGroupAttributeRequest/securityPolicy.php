<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;

use AlibabaCloud\Dara\Model;

class securityPolicy extends Model
{
    /**
     * @var bool
     */
    public $resetAfterUnbind;
    /**
     * @var bool
     */
    public $skipUserAuthCheck;
    protected $_name = [
        'resetAfterUnbind'  => 'ResetAfterUnbind',
        'skipUserAuthCheck' => 'SkipUserAuthCheck',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resetAfterUnbind) {
            $res['ResetAfterUnbind'] = $this->resetAfterUnbind;
        }

        if (null !== $this->skipUserAuthCheck) {
            $res['SkipUserAuthCheck'] = $this->skipUserAuthCheck;
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
        if (isset($map['ResetAfterUnbind'])) {
            $model->resetAfterUnbind = $map['ResetAfterUnbind'];
        }

        if (isset($map['SkipUserAuthCheck'])) {
            $model->skipUserAuthCheck = $map['SkipUserAuthCheck'];
        }

        return $model;
    }
}

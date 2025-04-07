<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;

use AlibabaCloud\Tea\Model;

class securityPolicy extends Model
{
    /**
     * @description Specifies whether to reset after unbinding from a delivery group.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $resetAfterUnbind;

    /**
     * @description Specifies whether to skip user permission verification.
     *
     * Valid values:
     *
     *   true
     *   false: This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $skipUserAuthCheck;
    protected $_name = [
        'resetAfterUnbind' => 'ResetAfterUnbind',
        'skipUserAuthCheck' => 'SkipUserAuthCheck',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return securityPolicy
     */
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

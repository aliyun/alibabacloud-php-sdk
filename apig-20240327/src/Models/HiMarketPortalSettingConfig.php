<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HiMarketPortalSettingConfig extends Model
{
    /**
     * @var bool
     */
    public $autoApproveDevelopers;

    /**
     * @var bool
     */
    public $autoApproveSubscriptions;

    /**
     * @var bool
     */
    public $builtinAuthEnabled;
    protected $_name = [
        'autoApproveDevelopers' => 'autoApproveDevelopers',
        'autoApproveSubscriptions' => 'autoApproveSubscriptions',
        'builtinAuthEnabled' => 'builtinAuthEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoApproveDevelopers) {
            $res['autoApproveDevelopers'] = $this->autoApproveDevelopers;
        }

        if (null !== $this->autoApproveSubscriptions) {
            $res['autoApproveSubscriptions'] = $this->autoApproveSubscriptions;
        }

        if (null !== $this->builtinAuthEnabled) {
            $res['builtinAuthEnabled'] = $this->builtinAuthEnabled;
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
        if (isset($map['autoApproveDevelopers'])) {
            $model->autoApproveDevelopers = $map['autoApproveDevelopers'];
        }

        if (isset($map['autoApproveSubscriptions'])) {
            $model->autoApproveSubscriptions = $map['autoApproveSubscriptions'];
        }

        if (isset($map['builtinAuthEnabled'])) {
            $model->builtinAuthEnabled = $map['builtinAuthEnabled'];
        }

        return $model;
    }
}

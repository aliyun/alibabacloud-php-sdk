<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class polarClawSaaSApplicationAttribute extends Model
{
    /**
     * @var string
     */
    public $authCallbackURL;

    /**
     * @var string
     */
    public $supabaseClusterId;
    protected $_name = [
        'authCallbackURL' => 'AuthCallbackURL',
        'supabaseClusterId' => 'SupabaseClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCallbackURL) {
            $res['AuthCallbackURL'] = $this->authCallbackURL;
        }

        if (null !== $this->supabaseClusterId) {
            $res['SupabaseClusterId'] = $this->supabaseClusterId;
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
        if (isset($map['AuthCallbackURL'])) {
            $model->authCallbackURL = $map['AuthCallbackURL'];
        }

        if (isset($map['SupabaseClusterId'])) {
            $model->supabaseClusterId = $map['SupabaseClusterId'];
        }

        return $model;
    }
}

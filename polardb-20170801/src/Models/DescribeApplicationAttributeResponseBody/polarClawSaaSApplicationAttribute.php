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
     * @var string[]
     */
    public $authProviders;

    /**
     * @var string
     */
    public $supabaseClusterId;
    protected $_name = [
        'authCallbackURL' => 'AuthCallbackURL',
        'authProviders' => 'AuthProviders',
        'supabaseClusterId' => 'SupabaseClusterId',
    ];

    public function validate()
    {
        if (\is_array($this->authProviders)) {
            Model::validateArray($this->authProviders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCallbackURL) {
            $res['AuthCallbackURL'] = $this->authCallbackURL;
        }

        if (null !== $this->authProviders) {
            if (\is_array($this->authProviders)) {
                $res['AuthProviders'] = [];
                $n1 = 0;
                foreach ($this->authProviders as $item1) {
                    $res['AuthProviders'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['AuthProviders'])) {
            if (!empty($map['AuthProviders'])) {
                $model->authProviders = [];
                $n1 = 0;
                foreach ($map['AuthProviders'] as $item1) {
                    $model->authProviders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupabaseClusterId'])) {
            $model->supabaseClusterId = $map['SupabaseClusterId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersResponseBody\OIDCProviders\OIDCProvider;

class OIDCProviders extends Model
{
    /**
     * @var OIDCProvider[]
     */
    public $OIDCProvider;
    protected $_name = [
        'OIDCProvider' => 'OIDCProvider',
    ];

    public function validate()
    {
        if (\is_array($this->OIDCProvider)) {
            Model::validateArray($this->OIDCProvider);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OIDCProvider) {
            if (\is_array($this->OIDCProvider)) {
                $res['OIDCProvider'] = [];
                $n1                  = 0;
                foreach ($this->OIDCProvider as $item1) {
                    $res['OIDCProvider'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['OIDCProvider'])) {
            if (!empty($map['OIDCProvider'])) {
                $model->OIDCProvider = [];
                $n1                  = 0;
                foreach ($map['OIDCProvider'] as $item1) {
                    $model->OIDCProvider[$n1++] = OIDCProvider::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

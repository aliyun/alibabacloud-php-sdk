<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersResponseBody\OIDCProviders\OIDCProvider;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OIDCProvider) {
            $res['OIDCProvider'] = [];
            if (null !== $this->OIDCProvider && \is_array($this->OIDCProvider)) {
                $n = 0;
                foreach ($this->OIDCProvider as $item) {
                    $res['OIDCProvider'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OIDCProviders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OIDCProvider'])) {
            if (!empty($map['OIDCProvider'])) {
                $model->OIDCProvider = [];
                $n                   = 0;
                foreach ($map['OIDCProvider'] as $item) {
                    $model->OIDCProvider[$n++] = null !== $item ? OIDCProvider::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

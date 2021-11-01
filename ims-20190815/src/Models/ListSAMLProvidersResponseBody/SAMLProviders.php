<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponseBody\SAMLProviders\SAMLProvider;
use AlibabaCloud\Tea\Model;

class SAMLProviders extends Model
{
    /**
     * @var SAMLProvider[]
     */
    public $SAMLProvider;
    protected $_name = [
        'SAMLProvider' => 'SAMLProvider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SAMLProvider) {
            $res['SAMLProvider'] = [];
            if (null !== $this->SAMLProvider && \is_array($this->SAMLProvider)) {
                $n = 0;
                foreach ($this->SAMLProvider as $item) {
                    $res['SAMLProvider'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SAMLProviders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SAMLProvider'])) {
            if (!empty($map['SAMLProvider'])) {
                $model->SAMLProvider = [];
                $n                   = 0;
                foreach ($map['SAMLProvider'] as $item) {
                    $model->SAMLProvider[$n++] = null !== $item ? SAMLProvider::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

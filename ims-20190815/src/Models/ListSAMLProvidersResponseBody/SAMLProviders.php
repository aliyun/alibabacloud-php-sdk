<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponseBody\SAMLProviders\SAMLProvider;

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
        if (\is_array($this->SAMLProvider)) {
            Model::validateArray($this->SAMLProvider);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SAMLProvider) {
            if (\is_array($this->SAMLProvider)) {
                $res['SAMLProvider'] = [];
                $n1                  = 0;
                foreach ($this->SAMLProvider as $item1) {
                    $res['SAMLProvider'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SAMLProvider'])) {
            if (!empty($map['SAMLProvider'])) {
                $model->SAMLProvider = [];
                $n1                  = 0;
                foreach ($map['SAMLProvider'] as $item1) {
                    $model->SAMLProvider[$n1++] = SAMLProvider::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

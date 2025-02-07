<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationResponseBody\application;

use AlibabaCloud\Dara\Model;

class redirectUris extends Model
{
    /**
     * @var string[]
     */
    public $redirectUri;
    protected $_name = [
        'redirectUri' => 'RedirectUri',
    ];

    public function validate()
    {
        if (\is_array($this->redirectUri)) {
            Model::validateArray($this->redirectUri);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->redirectUri) {
            if (\is_array($this->redirectUri)) {
                $res['RedirectUri'] = [];
                $n1                 = 0;
                foreach ($this->redirectUri as $item1) {
                    $res['RedirectUri'][$n1++] = $item1;
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
        if (isset($map['RedirectUri'])) {
            if (!empty($map['RedirectUri'])) {
                $model->redirectUri = [];
                $n1                 = 0;
                foreach ($map['RedirectUri'] as $item1) {
                    $model->redirectUri[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

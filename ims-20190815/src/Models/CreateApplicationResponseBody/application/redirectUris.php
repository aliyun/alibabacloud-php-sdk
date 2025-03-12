<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody\application;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->redirectUri) {
            $res['RedirectUri'] = $this->redirectUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redirectUris
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RedirectUri'])) {
            if (!empty($map['RedirectUri'])) {
                $model->redirectUri = $map['RedirectUri'];
            }
        }

        return $model;
    }
}

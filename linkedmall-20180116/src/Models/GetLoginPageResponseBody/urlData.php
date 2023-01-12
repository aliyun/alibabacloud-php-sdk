<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetLoginPageResponseBody;

use AlibabaCloud\Tea\Model;

class urlData extends Model
{
    /**
     * @example https://**********
     *
     * @var string
     */
    public $returnUrl;
    protected $_name = [
        'returnUrl' => 'ReturnUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urlData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }

        return $model;
    }
}

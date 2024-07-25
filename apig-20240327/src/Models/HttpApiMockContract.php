<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class HttpApiMockContract extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 200
     *
     * @var int
     */
    public $responseCode;

    /**
     * @var string
     */
    public $responseContent;
    protected $_name = [
        'enable'          => 'enable',
        'responseCode'    => 'responseCode',
        'responseContent' => 'responseContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->responseCode) {
            $res['responseCode'] = $this->responseCode;
        }
        if (null !== $this->responseContent) {
            $res['responseContent'] = $this->responseContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiMockContract
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['responseCode'])) {
            $model->responseCode = $map['responseCode'];
        }
        if (isset($map['responseContent'])) {
            $model->responseContent = $map['responseContent'];
        }

        return $model;
    }
}

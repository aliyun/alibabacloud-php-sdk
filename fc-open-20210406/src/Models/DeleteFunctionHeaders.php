<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class DeleteFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description 用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应
     *
     * @var string
     */
    public $ifMatch;
    protected $_name = [
        'ifMatch' => 'If-Match',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->ifMatch) {
            $res['If-Match'] = $this->ifMatch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFunctionHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['If-Match'])) {
            $model->ifMatch = $map['If-Match'];
        }

        return $model;
    }
}

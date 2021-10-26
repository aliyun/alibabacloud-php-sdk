<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description 用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应
     *
     * @var string
     */
    public $ifMatch;

    /**
     * @var string
     */
    public $xFcAccountId;

    /**
     * @description 代码校验
     *
     * @var string
     */
    public $xFcCodeChecksum;
    protected $_name = [
        'ifMatch'         => 'If-Match',
        'xFcAccountId'    => 'X-Fc-Account-Id',
        'xFcCodeChecksum' => 'x-fc-code-checksum',
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
        if (null !== $this->xFcAccountId) {
            $res['X-Fc-Account-Id'] = $this->xFcAccountId;
        }
        if (null !== $this->xFcCodeChecksum) {
            $res['x-fc-code-checksum'] = $this->xFcCodeChecksum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFunctionHeaders
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
        if (isset($map['X-Fc-Account-Id'])) {
            $model->xFcAccountId = $map['X-Fc-Account-Id'];
        }
        if (isset($map['x-fc-code-checksum'])) {
            $model->xFcCodeChecksum = $map['x-fc-code-checksum'];
        }

        return $model;
    }
}

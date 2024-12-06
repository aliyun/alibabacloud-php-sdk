<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class SaveVirtualDatasourceDdlResponseBody extends Model
{
    /**
     * @example NoAuth
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var mixed
     */
    public $data;

    /**
     * @example NoAuth
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 72ABCA5B-1E93-55D3-8A61-6D8A03CC5C8B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'code',
        'data'      => 'data',
        'errorMsg'  => 'errorMsg',
        'requestId' => 'requestId',
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveVirtualDatasourceDdlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasInfoResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListSaasInfoResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @description Id of the request
     *
     * @example A629A28F-F25E-5572-A679-FA46FB0151D6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 06614fdb-c72f-436e-8003-dfe8a2854a15
     *
     * @var string
     */
    public $saasToken;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'saasToken' => 'SaasToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->saasToken) {
            $res['SaasToken'] = $this->saasToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSaasInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SaasToken'])) {
            $model->saasToken = $map['SaasToken'];
        }

        return $model;
    }
}

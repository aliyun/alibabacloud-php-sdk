<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\ingressConfigs;
use AlibabaCloud\Tea\Model;

class ListK8sIngressRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ingressConfigs[]
     */
    public $ingressConfigs;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'ingressConfigs' => 'IngressConfigs',
        'code'           => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ingressConfigs) {
            $res['IngressConfigs'] = [];
            if (null !== $this->ingressConfigs && \is_array($this->ingressConfigs)) {
                $n = 0;
                foreach ($this->ingressConfigs as $item) {
                    $res['IngressConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListK8sIngressRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IngressConfigs'])) {
            if (!empty($map['IngressConfigs'])) {
                $model->ingressConfigs = [];
                $n                     = 0;
                foreach ($map['IngressConfigs'] as $item) {
                    $model->ingressConfigs[$n++] = null !== $item ? ingressConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateK8sResponseBody\privateK8sInfos;
use AlibabaCloud\Tea\Model;

class ListPrivateK8sResponseBody extends Model
{
    /**
     * @var privateK8sInfos[]
     */
    public $privateK8sInfos;

    /**
     * @example 52870893-48A7-5A9E-9E05-6253E5B6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'privateK8sInfos' => 'PrivateK8sInfos',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateK8sInfos) {
            $res['PrivateK8sInfos'] = [];
            if (null !== $this->privateK8sInfos && \is_array($this->privateK8sInfos)) {
                $n = 0;
                foreach ($this->privateK8sInfos as $item) {
                    $res['PrivateK8sInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateK8sResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateK8sInfos'])) {
            if (!empty($map['PrivateK8sInfos'])) {
                $model->privateK8sInfos = [];
                $n                      = 0;
                foreach ($map['PrivateK8sInfos'] as $item) {
                    $model->privateK8sInfos[$n++] = null !== $item ? privateK8sInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

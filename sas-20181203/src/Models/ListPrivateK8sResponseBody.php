<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateK8sResponseBody\privateK8sInfos;

class ListPrivateK8sResponseBody extends Model
{
    /**
     * @var privateK8sInfos[]
     */
    public $privateK8sInfos;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'privateK8sInfos' => 'PrivateK8sInfos',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->privateK8sInfos)) {
            Model::validateArray($this->privateK8sInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateK8sInfos) {
            if (\is_array($this->privateK8sInfos)) {
                $res['PrivateK8sInfos'] = [];
                $n1                     = 0;
                foreach ($this->privateK8sInfos as $item1) {
                    $res['PrivateK8sInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PrivateK8sInfos'])) {
            if (!empty($map['PrivateK8sInfos'])) {
                $model->privateK8sInfos = [];
                $n1                     = 0;
                foreach ($map['PrivateK8sInfos'] as $item1) {
                    $model->privateK8sInfos[$n1++] = privateK8sInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

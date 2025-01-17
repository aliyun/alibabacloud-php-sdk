<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListK8sAccessInfoResponseBody\k8sAccessInfos;

class ListK8sAccessInfoResponseBody extends Model
{
    /**
     * @var k8sAccessInfos[]
     */
    public $k8sAccessInfos;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'k8sAccessInfos' => 'K8sAccessInfos',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->k8sAccessInfos)) {
            Model::validateArray($this->k8sAccessInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->k8sAccessInfos) {
            if (\is_array($this->k8sAccessInfos)) {
                $res['K8sAccessInfos'] = [];
                $n1                    = 0;
                foreach ($this->k8sAccessInfos as $item1) {
                    $res['K8sAccessInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['K8sAccessInfos'])) {
            if (!empty($map['K8sAccessInfos'])) {
                $model->k8sAccessInfos = [];
                $n1                    = 0;
                foreach ($map['K8sAccessInfos'] as $item1) {
                    $model->k8sAccessInfos[$n1++] = k8sAccessInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

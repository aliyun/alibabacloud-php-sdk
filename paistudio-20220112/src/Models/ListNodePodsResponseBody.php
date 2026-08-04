<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListNodePodsResponseBody extends Model
{
    /**
     * @var NodePodInfo[]
     */
    public $nodePodInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodePodInfos' => 'NodePodInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->nodePodInfos)) {
            Model::validateArray($this->nodePodInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodePodInfos) {
            if (\is_array($this->nodePodInfos)) {
                $res['NodePodInfos'] = [];
                $n1 = 0;
                foreach ($this->nodePodInfos as $item1) {
                    $res['NodePodInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NodePodInfos'])) {
            if (!empty($map['NodePodInfos'])) {
                $model->nodePodInfos = [];
                $n1 = 0;
                foreach ($map['NodePodInfos'] as $item1) {
                    $model->nodePodInfos[$n1] = NodePodInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

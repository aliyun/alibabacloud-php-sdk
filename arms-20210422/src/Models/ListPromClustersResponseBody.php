<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPromClustersResponseBody\promClusterList;

class ListPromClustersResponseBody extends Model
{
    /**
     * @var promClusterList[]
     */
    public $promClusterList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'promClusterList' => 'PromClusterList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->promClusterList)) {
            Model::validateArray($this->promClusterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promClusterList) {
            if (\is_array($this->promClusterList)) {
                $res['PromClusterList'] = [];
                $n1 = 0;
                foreach ($this->promClusterList as $item1) {
                    $res['PromClusterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PromClusterList'])) {
            if (!empty($map['PromClusterList'])) {
                $model->promClusterList = [];
                $n1 = 0;
                foreach ($map['PromClusterList'] as $item1) {
                    $model->promClusterList[$n1] = promClusterList::fromMap($item1);
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

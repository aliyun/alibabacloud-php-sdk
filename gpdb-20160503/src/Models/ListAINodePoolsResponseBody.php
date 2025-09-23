<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListAINodePoolsResponseBody\AINodePoolInfos;

class ListAINodePoolsResponseBody extends Model
{
    /**
     * @var AINodePoolInfos[]
     */
    public $AINodePoolInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AINodePoolInfos' => 'AINodePoolInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->AINodePoolInfos)) {
            Model::validateArray($this->AINodePoolInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AINodePoolInfos) {
            if (\is_array($this->AINodePoolInfos)) {
                $res['AINodePoolInfos'] = [];
                $n1 = 0;
                foreach ($this->AINodePoolInfos as $item1) {
                    $res['AINodePoolInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AINodePoolInfos'])) {
            if (!empty($map['AINodePoolInfos'])) {
                $model->AINodePoolInfos = [];
                $n1 = 0;
                foreach ($map['AINodePoolInfos'] as $item1) {
                    $model->AINodePoolInfos[$n1] = AINodePoolInfos::fromMap($item1);
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

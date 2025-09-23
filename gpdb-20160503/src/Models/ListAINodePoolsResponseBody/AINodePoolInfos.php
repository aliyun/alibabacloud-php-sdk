<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListAINodePoolsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListAINodePoolsResponseBody\AINodePoolInfos\AINodeInfos;

class AINodePoolInfos extends Model
{
    /**
     * @var AINodeInfos[]
     */
    public $AINodeInfos;

    /**
     * @var string
     */
    public $AINodePoolId;

    /**
     * @var string
     */
    public $nodeNum;
    protected $_name = [
        'AINodeInfos' => 'AINodeInfos',
        'AINodePoolId' => 'AINodePoolId',
        'nodeNum' => 'NodeNum',
    ];

    public function validate()
    {
        if (\is_array($this->AINodeInfos)) {
            Model::validateArray($this->AINodeInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AINodeInfos) {
            if (\is_array($this->AINodeInfos)) {
                $res['AINodeInfos'] = [];
                $n1 = 0;
                foreach ($this->AINodeInfos as $item1) {
                    $res['AINodeInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->AINodePoolId) {
            $res['AINodePoolId'] = $this->AINodePoolId;
        }

        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
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
        if (isset($map['AINodeInfos'])) {
            if (!empty($map['AINodeInfos'])) {
                $model->AINodeInfos = [];
                $n1 = 0;
                foreach ($map['AINodeInfos'] as $item1) {
                    $model->AINodeInfos[$n1] = AINodeInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AINodePoolId'])) {
            $model->AINodePoolId = $map['AINodePoolId'];
        }

        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        return $model;
    }
}

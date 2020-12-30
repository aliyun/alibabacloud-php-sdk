<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget\clientMasterNodes\clientMasterNode;
use AlibabaCloud\Tea\Model;

class clientMasterNodes extends Model
{
    /**
     * @var clientMasterNode[]
     */
    public $clientMasterNode;
    protected $_name = [
        'clientMasterNode' => 'ClientMasterNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientMasterNode) {
            $res['ClientMasterNode'] = [];
            if (null !== $this->clientMasterNode && \is_array($this->clientMasterNode)) {
                $n = 0;
                foreach ($this->clientMasterNode as $item) {
                    $res['ClientMasterNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientMasterNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientMasterNode'])) {
            if (!empty($map['ClientMasterNode'])) {
                $model->clientMasterNode = [];
                $n                       = 0;
                foreach ($map['ClientMasterNode'] as $item) {
                    $model->clientMasterNode[$n++] = null !== $item ? clientMasterNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

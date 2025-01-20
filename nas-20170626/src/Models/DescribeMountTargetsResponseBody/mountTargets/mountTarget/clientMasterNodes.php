<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget\clientMasterNodes\clientMasterNode;

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
        if (\is_array($this->clientMasterNode)) {
            Model::validateArray($this->clientMasterNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientMasterNode) {
            if (\is_array($this->clientMasterNode)) {
                $res['ClientMasterNode'] = [];
                $n1                      = 0;
                foreach ($this->clientMasterNode as $item1) {
                    $res['ClientMasterNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ClientMasterNode'])) {
            if (!empty($map['ClientMasterNode'])) {
                $model->clientMasterNode = [];
                $n1                      = 0;
                foreach ($map['ClientMasterNode'] as $item1) {
                    $model->clientMasterNode[$n1++] = clientMasterNode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

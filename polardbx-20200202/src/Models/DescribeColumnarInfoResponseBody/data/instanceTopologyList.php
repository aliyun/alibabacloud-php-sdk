<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeColumnarInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeColumnarInfoResponseBody\data\instanceTopologyList\physicalNodes;

class instanceTopologyList extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var physicalNodes[]
     */
    public $physicalNodes;
    protected $_name = [
        'comment' => 'Comment',
        'instanceName' => 'InstanceName',
        'physicalNodes' => 'PhysicalNodes',
    ];

    public function validate()
    {
        if (\is_array($this->physicalNodes)) {
            Model::validateArray($this->physicalNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->physicalNodes) {
            if (\is_array($this->physicalNodes)) {
                $res['PhysicalNodes'] = [];
                $n1 = 0;
                foreach ($this->physicalNodes as $item1) {
                    $res['PhysicalNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PhysicalNodes'])) {
            if (!empty($map['PhysicalNodes'])) {
                $model->physicalNodes = [];
                $n1 = 0;
                foreach ($map['PhysicalNodes'] as $item1) {
                    $model->physicalNodes[$n1] = physicalNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

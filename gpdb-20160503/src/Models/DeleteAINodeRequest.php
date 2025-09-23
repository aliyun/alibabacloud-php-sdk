<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DeleteAINodeRequest extends Model
{
    /**
     * @var int
     */
    public $AINodeNum;

    /**
     * @var string
     */
    public $AINodePoolId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string[]
     */
    public $nodeNames;
    protected $_name = [
        'AINodeNum' => 'AINodeNum',
        'AINodePoolId' => 'AINodePoolId',
        'DBInstanceId' => 'DBInstanceId',
        'nodeNames' => 'NodeNames',
    ];

    public function validate()
    {
        if (\is_array($this->nodeNames)) {
            Model::validateArray($this->nodeNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AINodeNum) {
            $res['AINodeNum'] = $this->AINodeNum;
        }

        if (null !== $this->AINodePoolId) {
            $res['AINodePoolId'] = $this->AINodePoolId;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->nodeNames) {
            if (\is_array($this->nodeNames)) {
                $res['NodeNames'] = [];
                $n1 = 0;
                foreach ($this->nodeNames as $item1) {
                    $res['NodeNames'][$n1] = $item1;
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
        if (isset($map['AINodeNum'])) {
            $model->AINodeNum = $map['AINodeNum'];
        }

        if (isset($map['AINodePoolId'])) {
            $model->AINodePoolId = $map['AINodePoolId'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['NodeNames'])) {
            if (!empty($map['NodeNames'])) {
                $model->nodeNames = [];
                $n1 = 0;
                foreach ($map['NodeNames'] as $item1) {
                    $model->nodeNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeleteAINodesRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string[]
     */
    public $DBNodeId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'DBNodeId' => 'DBNodeId',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeId)) {
            Model::validateArray($this->DBNodeId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBNodeId) {
            if (\is_array($this->DBNodeId)) {
                $res['DBNodeId'] = [];
                $n1 = 0;
                foreach ($this->DBNodeId as $item1) {
                    $res['DBNodeId'][$n1] = $item1;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBNodeId'])) {
            if (!empty($map['DBNodeId'])) {
                $model->DBNodeId = [];
                $n1 = 0;
                foreach ($map['DBNodeId'] as $item1) {
                    $model->DBNodeId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

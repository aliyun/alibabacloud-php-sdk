<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class NodeSelector extends Model
{
    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string[]
     */
    public $nodeGroupIds;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var string[]
     */
    public $nodeGroupNames;

    /**
     * @var string[]
     */
    public $nodeGroupTypes;

    /**
     * @var string[]
     */
    public $nodeNames;

    /**
     * @var string
     */
    public $nodeSelectType;
    protected $_name = [
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupIds' => 'NodeGroupIds',
        'nodeGroupName' => 'NodeGroupName',
        'nodeGroupNames' => 'NodeGroupNames',
        'nodeGroupTypes' => 'NodeGroupTypes',
        'nodeNames' => 'NodeNames',
        'nodeSelectType' => 'NodeSelectType',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroupIds)) {
            Model::validateArray($this->nodeGroupIds);
        }
        if (\is_array($this->nodeGroupNames)) {
            Model::validateArray($this->nodeGroupNames);
        }
        if (\is_array($this->nodeGroupTypes)) {
            Model::validateArray($this->nodeGroupTypes);
        }
        if (\is_array($this->nodeNames)) {
            Model::validateArray($this->nodeNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupIds) {
            if (\is_array($this->nodeGroupIds)) {
                $res['NodeGroupIds'] = [];
                $n1 = 0;
                foreach ($this->nodeGroupIds as $item1) {
                    $res['NodeGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        if (null !== $this->nodeGroupNames) {
            if (\is_array($this->nodeGroupNames)) {
                $res['NodeGroupNames'] = [];
                $n1 = 0;
                foreach ($this->nodeGroupNames as $item1) {
                    $res['NodeGroupNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeGroupTypes) {
            if (\is_array($this->nodeGroupTypes)) {
                $res['NodeGroupTypes'] = [];
                $n1 = 0;
                foreach ($this->nodeGroupTypes as $item1) {
                    $res['NodeGroupTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->nodeSelectType) {
            $res['NodeSelectType'] = $this->nodeSelectType;
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
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupIds'])) {
            if (!empty($map['NodeGroupIds'])) {
                $model->nodeGroupIds = [];
                $n1 = 0;
                foreach ($map['NodeGroupIds'] as $item1) {
                    $model->nodeGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }

        if (isset($map['NodeGroupNames'])) {
            if (!empty($map['NodeGroupNames'])) {
                $model->nodeGroupNames = [];
                $n1 = 0;
                foreach ($map['NodeGroupNames'] as $item1) {
                    $model->nodeGroupNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeGroupTypes'])) {
            if (!empty($map['NodeGroupTypes'])) {
                $model->nodeGroupTypes = [];
                $n1 = 0;
                foreach ($map['NodeGroupTypes'] as $item1) {
                    $model->nodeGroupTypes[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['NodeSelectType'])) {
            $model->nodeSelectType = $map['NodeSelectType'];
        }

        return $model;
    }
}

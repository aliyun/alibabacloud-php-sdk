<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ComponentLayout;

use AlibabaCloud\Dara\Model;

class nodeSelector extends Model
{
    /**
     * @var int
     */
    public $nodeEndIndex;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var int
     */
    public $nodeGroupIndex;

    /**
     * @var string
     */
    public $nodeGroupName;

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

    /**
     * @var int
     */
    public $nodeStartIndex;
    protected $_name = [
        'nodeEndIndex' => 'NodeEndIndex',
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupIndex' => 'NodeGroupIndex',
        'nodeGroupName' => 'NodeGroupName',
        'nodeGroupTypes' => 'NodeGroupTypes',
        'nodeNames' => 'NodeNames',
        'nodeSelectType' => 'NodeSelectType',
        'nodeStartIndex' => 'NodeStartIndex',
    ];

    public function validate()
    {
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
        if (null !== $this->nodeEndIndex) {
            $res['NodeEndIndex'] = $this->nodeEndIndex;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupIndex) {
            $res['NodeGroupIndex'] = $this->nodeGroupIndex;
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
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

        if (null !== $this->nodeStartIndex) {
            $res['NodeStartIndex'] = $this->nodeStartIndex;
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
        if (isset($map['NodeEndIndex'])) {
            $model->nodeEndIndex = $map['NodeEndIndex'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupIndex'])) {
            $model->nodeGroupIndex = $map['NodeGroupIndex'];
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
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

        if (isset($map['NodeStartIndex'])) {
            $model->nodeStartIndex = $map['NodeStartIndex'];
        }

        return $model;
    }
}

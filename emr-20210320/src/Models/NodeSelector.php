<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class NodeSelector extends Model
{
    /**
     * @var string
     */
    public $nodeGroupId;

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
    protected $_name = [
        'nodeGroupId'    => 'NodeGroupId',
        'nodeGroupName'  => 'NodeGroupName',
        'nodeGroupTypes' => 'NodeGroupTypes',
        'nodeNames'      => 'NodeNames',
        'nodeSelectType' => 'NodeSelectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->nodeGroupTypes) {
            $res['NodeGroupTypes'] = $this->nodeGroupTypes;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }
        if (null !== $this->nodeSelectType) {
            $res['NodeSelectType'] = $this->nodeSelectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeSelector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['NodeGroupTypes'])) {
            if (!empty($map['NodeGroupTypes'])) {
                $model->nodeGroupTypes = $map['NodeGroupTypes'];
            }
        }
        if (isset($map['NodeNames'])) {
            if (!empty($map['NodeNames'])) {
                $model->nodeNames = $map['NodeNames'];
            }
        }
        if (isset($map['NodeSelectType'])) {
            $model->nodeSelectType = $map['NodeSelectType'];
        }

        return $model;
    }
}

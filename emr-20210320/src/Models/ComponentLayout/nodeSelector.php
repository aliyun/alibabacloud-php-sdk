<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ComponentLayout;

use AlibabaCloud\Tea\Model;

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
        'nodeEndIndex'   => 'NodeEndIndex',
        'nodeGroupId'    => 'NodeGroupId',
        'nodeGroupIndex' => 'NodeGroupIndex',
        'nodeGroupName'  => 'NodeGroupName',
        'nodeGroupTypes' => 'NodeGroupTypes',
        'nodeNames'      => 'NodeNames',
        'nodeSelectType' => 'NodeSelectType',
        'nodeStartIndex' => 'NodeStartIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['NodeGroupTypes'] = $this->nodeGroupTypes;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }
        if (null !== $this->nodeSelectType) {
            $res['NodeSelectType'] = $this->nodeSelectType;
        }
        if (null !== $this->nodeStartIndex) {
            $res['NodeStartIndex'] = $this->nodeStartIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeSelector
     */
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
        if (isset($map['NodeStartIndex'])) {
            $model->nodeStartIndex = $map['NodeStartIndex'];
        }

        return $model;
    }
}

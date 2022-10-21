<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GraphFlowNode;

use AlibabaCloud\Tea\Model;

class nextNodes extends Model
{
    /**
     * @var int
     */
    public $checkType;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $lambda;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nextNodeId;

    /**
     * @var string[]
     */
    public $triggers;
    protected $_name = [
        'checkType'  => 'CheckType',
        'index'      => 'Index',
        'lambda'     => 'Lambda',
        'name'       => 'Name',
        'nextNodeId' => 'NextNodeId',
        'triggers'   => 'Triggers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextNodeId) {
            $res['NextNodeId'] = $this->nextNodeId;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = $this->triggers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextNodeId'])) {
            $model->nextNodeId = $map['NextNodeId'];
        }
        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = $map['Triggers'];
            }
        }

        return $model;
    }
}

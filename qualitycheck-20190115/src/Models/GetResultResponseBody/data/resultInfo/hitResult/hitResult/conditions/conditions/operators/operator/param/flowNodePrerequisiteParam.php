<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;

use AlibabaCloud\Dara\Model;

class flowNodePrerequisiteParam extends Model
{
    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $nodeMatchStatus;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'nodeId' => 'NodeId',
        'nodeMatchStatus' => 'NodeMatchStatus',
        'nodeName' => 'NodeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeMatchStatus) {
            $res['NodeMatchStatus'] = $this->nodeMatchStatus;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeMatchStatus'])) {
            $model->nodeMatchStatus = $map['NodeMatchStatus'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}

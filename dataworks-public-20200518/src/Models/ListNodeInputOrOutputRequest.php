<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListNodeInputOrOutputRequest extends Model
{
    /**
     * @var string
     */
    public $ioType;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'ioType' => 'IoType',
        'nodeId' => 'NodeId',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ioType) {
            $res['IoType'] = $this->ioType;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
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
        if (isset($map['IoType'])) {
            $model->ioType = $map['IoType'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}

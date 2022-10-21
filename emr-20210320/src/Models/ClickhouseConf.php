<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ClickhouseConf extends Model
{
    /**
     * @var int
     */
    public $initialReplica;

    /**
     * @var int
     */
    public $initialShard;

    /**
     * @var int
     */
    public $newNodeCount;

    /**
     * @var string
     */
    public $resizeType;
    protected $_name = [
        'initialReplica' => 'InitialReplica',
        'initialShard'   => 'InitialShard',
        'newNodeCount'   => 'NewNodeCount',
        'resizeType'     => 'ResizeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initialReplica) {
            $res['InitialReplica'] = $this->initialReplica;
        }
        if (null !== $this->initialShard) {
            $res['InitialShard'] = $this->initialShard;
        }
        if (null !== $this->newNodeCount) {
            $res['NewNodeCount'] = $this->newNodeCount;
        }
        if (null !== $this->resizeType) {
            $res['ResizeType'] = $this->resizeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClickhouseConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InitialReplica'])) {
            $model->initialReplica = $map['InitialReplica'];
        }
        if (isset($map['InitialShard'])) {
            $model->initialShard = $map['InitialShard'];
        }
        if (isset($map['NewNodeCount'])) {
            $model->newNodeCount = $map['NewNodeCount'];
        }
        if (isset($map['ResizeType'])) {
            $model->resizeType = $map['ResizeType'];
        }

        return $model;
    }
}

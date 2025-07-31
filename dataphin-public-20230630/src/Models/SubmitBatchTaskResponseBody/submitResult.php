<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskResponseBody;

use AlibabaCloud\Tea\Model;

class submitResult extends Model
{
    /**
     * @example n_12113111
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 1010312911
     *
     * @var int
     */
    public $submitId;
    protected $_name = [
        'nodeId' => 'NodeId',
        'submitId' => 'SubmitId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return submitResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskResponseBody;

use AlibabaCloud\Dara\Model;

class submitResult extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $submitId;
    protected $_name = [
        'nodeId' => 'NodeId',
        'submitId' => 'SubmitId',
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

        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
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

        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }

        return $model;
    }
}

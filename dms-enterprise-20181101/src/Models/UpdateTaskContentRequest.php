<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class UpdateTaskContentRequest extends Model
{
    /**
     * @var string
     */
    public $nodeContent;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'nodeContent' => 'NodeContent',
        'nodeId'      => 'NodeId',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeContent) {
            $res['NodeContent'] = $this->nodeContent;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['NodeContent'])) {
            $model->nodeContent = $map['NodeContent'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}

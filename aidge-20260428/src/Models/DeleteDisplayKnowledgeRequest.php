<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class DeleteDisplayKnowledgeRequest extends Model
{
    /**
     * @var string
     */
    public $ragId;

    /**
     * @var int[]
     */
    public $recordIds;
    protected $_name = [
        'ragId' => 'RagId',
        'recordIds' => 'RecordIds',
    ];

    public function validate()
    {
        if (\is_array($this->recordIds)) {
            Model::validateArray($this->recordIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ragId) {
            $res['RagId'] = $this->ragId;
        }

        if (null !== $this->recordIds) {
            if (\is_array($this->recordIds)) {
                $res['RecordIds'] = [];
                $n1 = 0;
                foreach ($this->recordIds as $item1) {
                    $res['RecordIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RagId'])) {
            $model->ragId = $map['RagId'];
        }

        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = [];
                $n1 = 0;
                foreach ($map['RecordIds'] as $item1) {
                    $model->recordIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

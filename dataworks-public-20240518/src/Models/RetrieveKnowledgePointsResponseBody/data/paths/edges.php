<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsResponseBody\data\paths;

use AlibabaCloud\Dara\Model;

class edges extends Model
{
    /**
     * @var string
     */
    public $fromId;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $toId;
    protected $_name = [
        'fromId' => 'FromId',
        'relationType' => 'RelationType',
        'toId' => 'ToId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->toId) {
            $res['ToId'] = $this->toId;
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
        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['ToId'])) {
            $model->toId = $map['ToId'];
        }

        return $model;
    }
}

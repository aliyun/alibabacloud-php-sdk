<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\PublishSkillVersionRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var bool
     */
    public $updateLatestLabel;
    protected $_name = [
        'updateLatestLabel' => 'updateLatestLabel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->updateLatestLabel) {
            $res['updateLatestLabel'] = $this->updateLatestLabel;
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
        if (isset($map['updateLatestLabel'])) {
            $model->updateLatestLabel = $map['updateLatestLabel'];
        }

        return $model;
    }
}

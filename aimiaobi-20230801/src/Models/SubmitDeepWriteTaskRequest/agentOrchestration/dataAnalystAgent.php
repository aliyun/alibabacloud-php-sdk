<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDeepWriteTaskRequest\agentOrchestration;

use AlibabaCloud\Dara\Model;

class dataAnalystAgent extends Model
{
    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'enableSearch' => 'EnableSearch',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableSearch) {
            $res['EnableSearch'] = $this->enableSearch;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['EnableSearch'])) {
            $model->enableSearch = $map['EnableSearch'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

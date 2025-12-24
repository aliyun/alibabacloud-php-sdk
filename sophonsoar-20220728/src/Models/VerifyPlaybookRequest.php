<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class VerifyPlaybookRequest extends Model
{
    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $taskFlow;
    protected $_name = [
        'playbookUuid' => 'PlaybookUuid',
        'taskFlow' => 'TaskFlow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->taskFlow) {
            $res['TaskFlow'] = $this->taskFlow;
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
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['TaskFlow'])) {
            $model->taskFlow = $map['TaskFlow'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DebugPlaybookRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $record;

    /**
     * @var string
     */
    public $taskflow;
    protected $_name = [
        'lang' => 'Lang',
        'playbookUuid' => 'PlaybookUuid',
        'record' => 'Record',
        'taskflow' => 'Taskflow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }

        if (null !== $this->taskflow) {
            $res['Taskflow'] = $this->taskflow;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }

        if (isset($map['Taskflow'])) {
            $model->taskflow = $map['Taskflow'];
        }

        return $model;
    }
}

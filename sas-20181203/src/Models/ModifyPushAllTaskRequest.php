<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyPushAllTaskRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var string
     */
    public $tasks;
    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'tasks'    => 'Tasks',
        'uuids'    => 'Uuids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->tasks) {
            $res['Tasks'] = $this->tasks;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Tasks'])) {
            $model->tasks = $map['Tasks'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}

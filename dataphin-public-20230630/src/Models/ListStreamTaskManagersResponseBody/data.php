<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStreamTaskManagersResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $taskmanagerId;
    protected $_name = [
        'path' => 'Path',
        'taskmanagerId' => 'TaskmanagerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->taskmanagerId) {
            $res['TaskmanagerId'] = $this->taskmanagerId;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['TaskmanagerId'])) {
            $model->taskmanagerId = $map['TaskmanagerId'];
        }

        return $model;
    }
}

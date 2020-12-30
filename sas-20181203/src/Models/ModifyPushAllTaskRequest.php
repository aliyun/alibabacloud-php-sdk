<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyPushAllTaskRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $uuids;

    /**
     * @var string
     */
    public $tasks;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'uuids'    => 'Uuids',
        'tasks'    => 'Tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = $this->tasks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPushAllTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }
        if (isset($map['Tasks'])) {
            $model->tasks = $map['Tasks'];
        }

        return $model;
    }
}

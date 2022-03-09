<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetBimProjectDrawFilesRequest extends Model
{
    /**
     * @var string
     */
    public $subject;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'subject' => 'Subject',
        'taskId'  => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBimProjectDrawFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

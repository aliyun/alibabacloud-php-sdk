<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryDISyncTaskConfigProcessResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskContent;
    protected $_name = [
        'message' => 'Message',
        'status' => 'Status',
        'taskContent' => 'TaskContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskContent) {
            $res['TaskContent'] = $this->taskContent;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskContent'])) {
            $model->taskContent = $map['TaskContent'];
        }

        return $model;
    }
}

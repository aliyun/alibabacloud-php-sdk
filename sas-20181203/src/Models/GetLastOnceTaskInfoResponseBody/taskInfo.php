<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetLastOnceTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;

class taskInfo extends Model
{
    /**
     * @var int
     */
    public $progress;
    /**
     * @var string
     */
    public $result;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'progress' => 'Progress',
        'result'   => 'Result',
        'status'   => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

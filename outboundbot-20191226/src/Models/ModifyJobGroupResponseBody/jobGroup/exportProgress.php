<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup;

use AlibabaCloud\Dara\Model;

class exportProgress extends Model
{
    /**
     * @var string
     */
    public $fileHttpUrl;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'fileHttpUrl' => 'FileHttpUrl',
        'progress' => 'Progress',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileHttpUrl) {
            $res['FileHttpUrl'] = $this->fileHttpUrl;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (isset($map['FileHttpUrl'])) {
            $model->fileHttpUrl = $map['FileHttpUrl'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

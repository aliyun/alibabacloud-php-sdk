<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup;

use AlibabaCloud\Tea\Model;

class exportProgress extends Model
{
    /**
     * @example https://***.oss-cn-shanghai.aliyuncs.com/sample
     *
     * @var string
     */
    public $fileHttpUrl;

    /**
     * @example 1
     *
     * @var string
     */
    public $progress;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fileHttpUrl' => 'FileHttpUrl',
        'progress'    => 'Progress',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return exportProgress
     */
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

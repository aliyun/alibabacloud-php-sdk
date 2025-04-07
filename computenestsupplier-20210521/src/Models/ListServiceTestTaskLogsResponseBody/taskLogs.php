<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTaskLogsResponseBody;

use AlibabaCloud\Tea\Model;

class taskLogs extends Model
{
    /**
     * @description The log content.
     *
     * @example log content
     *
     * @var string
     */
    public $content;

    /**
     * @description The UTC timestamp when the response is returned.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     *
     * @example 2022-12-12T20:00:09Z
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'content' => 'Content',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}

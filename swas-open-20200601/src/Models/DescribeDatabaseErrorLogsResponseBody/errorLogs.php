<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseErrorLogsResponseBody;

use AlibabaCloud\Tea\Model;

class errorLogs extends Model
{
    /**
     * @description The time when the resource was created. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2022-09-08T12:11:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error message returned.
     *
     * @example spid52 DBCC TRACEON 3499, server process ID (SPID) 52. This is an informational message only; no user action is required
     *
     * @var string
     */
    public $errorInfo;
    protected $_name = [
        'createTime' => 'CreateTime',
        'errorInfo' => 'ErrorInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }

        return $model;
    }
}

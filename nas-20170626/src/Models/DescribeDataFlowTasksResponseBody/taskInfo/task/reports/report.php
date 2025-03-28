<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task\reports;

use AlibabaCloud\Tea\Model;

class report extends Model
{
    /**
     * @description The name of the report.
     *
     *   CPFS:
     *
     * TotalFilesReport: task reports.
     *
     *   CPFS for LINGJUN:
     *
     *   FailedFilesReport: failed file reports.
     *   SkippedFilesReport: skipped file reports.
     *   SuccessFilesReport: successful file reports.
     *
     * @example TotalFilesReport
     *
     * @var string
     */
    public $name;

    /**
     * @description The report URL.
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'name' => 'Name',
        'path' => 'Path',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return report
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}

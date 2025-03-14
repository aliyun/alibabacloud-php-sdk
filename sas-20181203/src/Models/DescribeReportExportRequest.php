<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeReportExportRequest extends Model
{
    /**
     * @description The ID of the export task.
     *
     * >  You can call the [ExportCustomizeReport](https://help.aliyun.com/document_detail/2842677.html) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $exportId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'exportId' => 'ExportId',
        'lang' => 'Lang',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportId) {
            $res['ExportId'] = $this->exportId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReportExportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportId'])) {
            $model->exportId = $map['ExportId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}

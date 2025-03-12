<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeHcExportInfoRequest extends Model
{
    /**
     * @description The ID of the export task.
     *
     * >  You can call the [ExportWarning](~~ExportWarning~~) operation to query the IDs of export tasks.
     * @example 443285
     *
     * @var int
     */
    public $exportId;
    protected $_name = [
        'exportId' => 'ExportId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportId) {
            $res['ExportId'] = $this->exportId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHcExportInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportId'])) {
            $model->exportId = $map['ExportId'];
        }

        return $model;
    }
}

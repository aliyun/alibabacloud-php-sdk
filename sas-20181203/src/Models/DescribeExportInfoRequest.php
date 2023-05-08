<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExportInfoRequest extends Model
{
    /**
     * @description The ID of the export task.
     *
     * > You can call the [ExportRecord](~~ExportRecord~~) operation to query the IDs of export tasks.
     * @example 111
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
     * @return DescribeExportInfoRequest
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

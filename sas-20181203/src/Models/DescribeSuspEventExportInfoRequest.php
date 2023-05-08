<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventExportInfoRequest extends Model
{
    /**
     * @description The ID of the export task.
     *
     * > You can call the [ExportSuspEvents](~~ExportSuspEvents~~) operation to query the ID.
     * @example 123
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
     * @return DescribeSuspEventExportInfoRequest
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

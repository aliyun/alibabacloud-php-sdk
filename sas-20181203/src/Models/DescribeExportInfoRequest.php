<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExportInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $exportId;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'exportId' => 'ExportId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ExportId'])) {
            $model->exportId = $map['ExportId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventExportInfoRequest extends Model
{
    /**
     * @var int
     */
    public $exportId;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'exportId' => 'ExportId',
        'from'     => 'From',
        'sourceIp' => 'SourceIp',
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
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}

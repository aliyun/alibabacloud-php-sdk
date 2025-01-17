<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSuspEventExportInfoRequest extends Model
{
    /**
     * @var int
     */
    public $exportId;
    protected $_name = [
        'exportId' => 'ExportId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportId) {
            $res['ExportId'] = $this->exportId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportId'])) {
            $model->exportId = $map['ExportId'];
        }

        return $model;
    }
}

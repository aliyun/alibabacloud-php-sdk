<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models;

use AlibabaCloud\Dara\Model;

class StopScannerTaskRequest extends Model
{
    /**
     * @var string
     */
    public $scannerTaskId;
    protected $_name = [
        'scannerTaskId' => 'ScannerTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scannerTaskId) {
            $res['ScannerTaskId'] = $this->scannerTaskId;
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
        if (isset($map['ScannerTaskId'])) {
            $model->scannerTaskId = $map['ScannerTaskId'];
        }

        return $model;
    }
}

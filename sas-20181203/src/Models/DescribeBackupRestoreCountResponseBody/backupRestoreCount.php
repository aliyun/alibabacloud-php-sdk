<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupRestoreCountResponseBody;

use AlibabaCloud\Dara\Model;

class backupRestoreCount extends Model
{
    /**
     * @var int
     */
    public $recovering;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'recovering' => 'Recovering',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recovering) {
            $res['Recovering'] = $this->recovering;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Recovering'])) {
            $model->recovering = $map['Recovering'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

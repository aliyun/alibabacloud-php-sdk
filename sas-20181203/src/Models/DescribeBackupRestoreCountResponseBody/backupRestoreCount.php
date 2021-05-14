<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupRestoreCountResponseBody;

use AlibabaCloud\Tea\Model;

class backupRestoreCount extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $recovering;
    protected $_name = [
        'total'      => 'Total',
        'recovering' => 'Recovering',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->recovering) {
            $res['Recovering'] = $this->recovering;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupRestoreCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Recovering'])) {
            $model->recovering = $map['Recovering'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupRestoreCountResponseBody;

use AlibabaCloud\Tea\Model;

class backupRestoreCount extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $recovering;

    /**
     * @example 30
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'recovering' => 'Recovering',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return backupRestoreCount
     */
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

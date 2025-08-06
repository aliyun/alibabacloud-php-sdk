<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics;

use AlibabaCloud\Dara\Model;

class same extends Model
{
    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $skipped;

    /**
     * @var int
     */
    public $success;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'failed' => 'Failed',
        'skipped' => 'Skipped',
        'success' => 'Success',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }

        if (null !== $this->skipped) {
            $res['Skipped'] = $this->skipped;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }

        if (isset($map['Skipped'])) {
            $model->skipped = $map['Skipped'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

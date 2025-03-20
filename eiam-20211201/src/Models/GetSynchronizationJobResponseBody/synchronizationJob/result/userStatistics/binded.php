<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\userStatistics;

use AlibabaCloud\Tea\Model;

class binded extends Model
{
    /**
     * @description 失败数目
     *
     * @example 10
     *
     * @var int
     */
    public $failed;

    /**
     * @description 跳过数目
     *
     * @example 10
     *
     * @var int
     */
    public $skipped;

    /**
     * @description 成功数目
     *
     * @example 10
     *
     * @var int
     */
    public $success;

    /**
     * @description 总共数目
     *
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'failed' => 'Failed',
        'skipped' => 'Skipped',
        'success' => 'Success',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return binded
     */
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

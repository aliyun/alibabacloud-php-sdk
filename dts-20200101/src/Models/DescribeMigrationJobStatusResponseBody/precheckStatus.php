<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\precheckStatus\detail;
use AlibabaCloud\Tea\Model;

class precheckStatus extends Model
{
    /**
     * @description The result of each precheck item.
     *
     * @var detail
     */
    public $detail;

    /**
     * @description The precheck progress. Unit: %.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The precheck status. Valid values:
     *
     *   **NotStarted**
     *   **Suspending**:
     *   **Checking**
     *   **Failed**
     *   **Finished**
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'detail'  => 'Detail',
        'percent' => 'Percent',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return precheckStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

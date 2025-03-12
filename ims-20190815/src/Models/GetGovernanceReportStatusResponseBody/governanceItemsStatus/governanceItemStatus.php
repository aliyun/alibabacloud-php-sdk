<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponseBody\governanceItemsStatus;

use AlibabaCloud\Tea\Model;

class governanceItemStatus extends Model
{
    /**
     * @example AccountRecentUsingAccessKey
     *
     * @var string
     */
    public $governanceItem;

    /**
     * @example Progressing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'governanceItem' => 'GovernanceItem',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->governanceItem) {
            $res['GovernanceItem'] = $this->governanceItem;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return governanceItemStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GovernanceItem'])) {
            $model->governanceItem = $map['GovernanceItem'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponseBody\governanceItemsStatus;

use AlibabaCloud\Dara\Model;

class governanceItemStatus extends Model
{
    /**
     * @var string
     */
    public $governanceItem;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'governanceItem' => 'GovernanceItem',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

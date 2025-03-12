<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponseBody\governanceItemsStatus\governanceItemStatus;
use AlibabaCloud\Tea\Model;

class governanceItemsStatus extends Model
{
    /**
     * @var governanceItemStatus[]
     */
    public $governanceItemStatus;
    protected $_name = [
        'governanceItemStatus' => 'GovernanceItemStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->governanceItemStatus) {
            $res['GovernanceItemStatus'] = [];
            if (null !== $this->governanceItemStatus && \is_array($this->governanceItemStatus)) {
                $n = 0;
                foreach ($this->governanceItemStatus as $item) {
                    $res['GovernanceItemStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return governanceItemsStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GovernanceItemStatus'])) {
            if (!empty($map['GovernanceItemStatus'])) {
                $model->governanceItemStatus = [];
                $n                           = 0;
                foreach ($map['GovernanceItemStatus'] as $item) {
                    $model->governanceItemStatus[$n++] = null !== $item ? governanceItemStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

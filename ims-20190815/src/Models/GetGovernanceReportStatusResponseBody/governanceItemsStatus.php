<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponseBody\governanceItemsStatus\governanceItemStatus;

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
        if (\is_array($this->governanceItemStatus)) {
            Model::validateArray($this->governanceItemStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->governanceItemStatus) {
            if (\is_array($this->governanceItemStatus)) {
                $res['GovernanceItemStatus'] = [];
                $n1 = 0;
                foreach ($this->governanceItemStatus as $item1) {
                    $res['GovernanceItemStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['GovernanceItemStatus'])) {
            if (!empty($map['GovernanceItemStatus'])) {
                $model->governanceItemStatus = [];
                $n1 = 0;
                foreach ($map['GovernanceItemStatus'] as $item1) {
                    $model->governanceItemStatus[$n1] = governanceItemStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

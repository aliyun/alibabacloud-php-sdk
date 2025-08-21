<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponseBody\governanceItemsStatus;

class GetGovernanceReportStatusResponseBody extends Model
{
    /**
     * @var governanceItemsStatus
     */
    public $governanceItemsStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $wholeReportStatus;
    protected $_name = [
        'governanceItemsStatus' => 'GovernanceItemsStatus',
        'requestId' => 'RequestId',
        'wholeReportStatus' => 'WholeReportStatus',
    ];

    public function validate()
    {
        if (null !== $this->governanceItemsStatus) {
            $this->governanceItemsStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->governanceItemsStatus) {
            $res['GovernanceItemsStatus'] = null !== $this->governanceItemsStatus ? $this->governanceItemsStatus->toArray($noStream) : $this->governanceItemsStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->wholeReportStatus) {
            $res['WholeReportStatus'] = $this->wholeReportStatus;
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
        if (isset($map['GovernanceItemsStatus'])) {
            $model->governanceItemsStatus = governanceItemsStatus::fromMap($map['GovernanceItemsStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WholeReportStatus'])) {
            $model->wholeReportStatus = $map['WholeReportStatus'];
        }

        return $model;
    }
}

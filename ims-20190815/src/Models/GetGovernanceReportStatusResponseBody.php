<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponseBody\governanceItemsStatus;
use AlibabaCloud\Tea\Model;

class GetGovernanceReportStatusResponseBody extends Model
{
    /**
     * @var governanceItemsStatus
     */
    public $governanceItemsStatus;

    /**
     * @example F2CE9688-AA85-5F23-8C22-0EC23473405A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Progressing
     *
     * @var string
     */
    public $wholeReportStatus;
    protected $_name = [
        'governanceItemsStatus' => 'GovernanceItemsStatus',
        'requestId'             => 'RequestId',
        'wholeReportStatus'     => 'WholeReportStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->governanceItemsStatus) {
            $res['GovernanceItemsStatus'] = null !== $this->governanceItemsStatus ? $this->governanceItemsStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->wholeReportStatus) {
            $res['WholeReportStatus'] = $this->wholeReportStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGovernanceReportStatusResponseBody
     */
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

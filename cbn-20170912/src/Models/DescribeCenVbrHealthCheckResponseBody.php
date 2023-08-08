<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody\vbrHealthChecks;
use AlibabaCloud\Tea\Model;

class DescribeCenVbrHealthCheckResponseBody extends Model
{
    /**
     * @description The health check configuration of the VBR.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Indicates whether probing is enabled. Valid values:
     *
     *   **true**: yes
     *
     * If probing is enabled, the system does not switch to another route when the detected route is not reachable.
     *
     *   **false**: no
     *
     * If probing is disabled and a redundant route is specified, the system switches to the redundant route when the detected route is not reachable.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the CEN instance.
     *
     * @example B8C9702E-304A-4E18-AC89-BE2D91C2C176
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the Alibaba Cloud account that owns the VBR.
     *
     * >  The parameter is required if the VBR and the CEN instance belong to different Alibaba Cloud accounts.
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The page number of the returned page.
     *
     * @var vbrHealthChecks
     */
    public $vbrHealthChecks;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'vbrHealthChecks' => 'VbrHealthChecks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vbrHealthChecks) {
            $res['VbrHealthChecks'] = null !== $this->vbrHealthChecks ? $this->vbrHealthChecks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenVbrHealthCheckResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VbrHealthChecks'])) {
            $model->vbrHealthChecks = vbrHealthChecks::fromMap($map['VbrHealthChecks']);
        }

        return $model;
    }
}

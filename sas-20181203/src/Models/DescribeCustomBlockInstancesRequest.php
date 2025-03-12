<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomBlockInstancesRequest extends Model
{
    /**
     * @description The IP address that you want to specify in the rule.
     *
     * >  You can call the [DescribeCustomBlockRecords](~~DescribeCustomBlockRecords~~) operation to obtain the IP address.
     * @example 47.92.33.1xx
     *
     * @var string
     */
    public $blockIp;

    /**
     * @description The traffic direction that you want to specify in the custom rule. Valid values:
     *
     *   **in**: inbound
     *   **out**: outbound
     *
     * @example in
     *
     * @var string
     */
    public $bound;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 8
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether the rule is enabled for the server.
     *
     *   **2**: enabling failed
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'blockIp'         => 'BlockIp',
        'bound'           => 'Bound',
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'resourceOwnerId' => 'ResourceOwnerId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockIp) {
            $res['BlockIp'] = $this->blockIp;
        }
        if (null !== $this->bound) {
            $res['Bound'] = $this->bound;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomBlockInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockIp'])) {
            $model->blockIp = $map['BlockIp'];
        }
        if (isset($map['Bound'])) {
            $model->bound = $map['Bound'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

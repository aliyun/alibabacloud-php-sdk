<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewaysForCmsRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayRegionId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayRegionId' => 'GatewayRegionId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayRegionId) {
            $res['GatewayRegionId'] = $this->gatewayRegionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewaysForCmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayRegionId'])) {
            $model->gatewayRegionId = $map['GatewayRegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class ListGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayName;

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
    public $resourceName;
    protected $_name = [
        'gatewayId' => 'GatewayId',
        'gatewayName' => 'GatewayName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}

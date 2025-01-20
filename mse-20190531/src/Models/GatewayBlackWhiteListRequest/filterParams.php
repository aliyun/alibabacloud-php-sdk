<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GatewayBlackWhiteListRequest;

use AlibabaCloud\Dara\Model;

class filterParams extends Model
{
    /**
     * @var int
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var bool
     */
    public $isWhite;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $searchContent;
    /**
     * @var string
     */
    public $searchType;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'isWhite'         => 'IsWhite',
        'resourceType'    => 'ResourceType',
        'searchContent'   => 'SearchContent',
        'searchType'      => 'SearchType',
        'type'            => 'Type',
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

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->isWhite) {
            $res['IsWhite'] = $this->isWhite;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->searchContent) {
            $res['SearchContent'] = $this->searchContent;
        }

        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['IsWhite'])) {
            $model->isWhite = $map['IsWhite'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SearchContent'])) {
            $model->searchContent = $map['SearchContent'];
        }

        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

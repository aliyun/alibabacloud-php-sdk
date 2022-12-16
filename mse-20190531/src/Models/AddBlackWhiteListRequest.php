<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddBlackWhiteListRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The content of the blacklist.
     *
     * @example 1.117.115.51
     *
     * @var string
     */
    public $content;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-0fe488252dc44d55a9dd57875193****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description Specifies whether to enable the whitelist mode for authorization.
     *
     * @example false
     *
     * @var bool
     */
    public $isWhite;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $resourceIdJsonList;

    /**
     * @description The resource type to which the blacklist or whitelist applies.
     *
     * @example GATEWAY
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the blacklist.
     *
     * @example off
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of object in the blacklist or whitelist.
     *
     * @example IP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'content'            => 'Content',
        'gatewayUniqueId'    => 'GatewayUniqueId',
        'isWhite'            => 'IsWhite',
        'name'               => 'Name',
        'note'               => 'Note',
        'resourceIdJsonList' => 'ResourceIdJsonList',
        'resourceType'       => 'ResourceType',
        'status'             => 'Status',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->isWhite) {
            $res['IsWhite'] = $this->isWhite;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->resourceIdJsonList) {
            $res['ResourceIdJsonList'] = $this->resourceIdJsonList;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBlackWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['IsWhite'])) {
            $model->isWhite = $map['IsWhite'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['ResourceIdJsonList'])) {
            $model->resourceIdJsonList = $map['ResourceIdJsonList'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

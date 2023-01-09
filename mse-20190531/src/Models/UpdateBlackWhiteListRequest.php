<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateBlackWhiteListRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The content of the blacklist.
     *
     * @example 127.0.2.11
     *
     * @var string
     */
    public $content;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-c70622ff52fe49beb29bea9a6f52****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the blacklist.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description Specifies whether to modify the whitelist.
     *
     * @example true
     *
     * @var bool
     */
    public $isWhite;

    /**
     * @description The name.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The description.
     *
     * @example this is a note
     *
     * @var string
     */
    public $note;

    /**
     * @description The resource IDs in the JSON format.
     *
     * @example [123]
     *
     * @var string
     */
    public $resourceIdJsonList;

    /**
     * @description The type of the resource.
     *
     * @example GATEWAY
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Specifies whether to enable the blacklist or whitelist.
     *
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the blacklist or whitelist.
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
        'id'                 => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return UpdateBlackWhiteListRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

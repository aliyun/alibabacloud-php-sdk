<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GatewayBlackWhiteListResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The content of the blacklist.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $content;

    /**
     * @description The gateway ID.
     *
     * @example 81
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-5017305290e14centbrveca****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The time when the blacklist or whitelist was created.
     *
     * @example 2024-08-02T02:43:40.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the rule was modified.
     *
     * @example 2024-08-02T02:43:40.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the blacklist and whitelist.
     *
     * @example 549
     *
     * @var int
     */
    public $id;

    /**
     * @description Specifies whether to enable the whitelist feature.
     *
     * @example true
     *
     * @var bool
     */
    public $isWhite;

    /**
     * @description The name of the blacklist.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The comment.
     *
     * @var string
     */
    public $note;

    /**
     * @description The resource ID.
     *
     * @example 549
     *
     * @var int
     */
    public $resourceId;

    /**
     * @description The list of resource IDs in the JSON format.
     *
     *   If the value of the ResourceType parameter is ROUTE, the value of this parameter is the list of route IDs.
     *   If the value of the ResourceType parameter is DOMAIN, the value of this parameter is the list of domain names.
     *
     * @example [234]
     *
     * @var string
     */
    public $resourceIdJsonList;

    /**
     * @description The description of the resource name.
     *
     * @example {}
     *
     * @var string
     */
    public $resourceIdNameJson;

    /**
     * @description The effective scope of the blacklist or whitelist. Valid values:
     *
     *   GATEWAY
     *   DOMAIN
     *   ROUTE
     *
     * @example GATEWAY
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the blacklist or whitelist.
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the blacklist and whitelist. The value is fixed to IP address blacklist and whitelist.
     *
     * @example IP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'Content',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'isWhite' => 'IsWhite',
        'name' => 'Name',
        'note' => 'Note',
        'resourceId' => 'ResourceId',
        'resourceIdJsonList' => 'ResourceIdJsonList',
        'resourceIdNameJson' => 'ResourceIdNameJson',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceIdJsonList) {
            $res['ResourceIdJsonList'] = $this->resourceIdJsonList;
        }
        if (null !== $this->resourceIdNameJson) {
            $res['ResourceIdNameJson'] = $this->resourceIdNameJson;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceIdJsonList'])) {
            $model->resourceIdJsonList = $map['ResourceIdJsonList'];
        }
        if (isset($map['ResourceIdNameJson'])) {
            $model->resourceIdNameJson = $map['ResourceIdNameJson'];
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

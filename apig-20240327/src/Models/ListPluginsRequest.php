<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListPluginsRequest extends Model
{
    /**
     * @example api-cuip2pum1hksng6oni3g
     *
     * @var string
     */
    public $attachResourceId;

    /**
     * @example HttpApi
     *
     * @var string
     */
    public $attachResourceType;

    /**
     * @example gw-csrhgn6m1hkt65qbxxgg
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example AI
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @var bool
     */
    public $includeBuiltinAiGateway;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example pls-dn82a9djd8z****
     *
     * @var string
     */
    public $pluginClassId;

    /**
     * @example key-auth
     *
     * @var string
     */
    public $pluginClassName;

    /**
     * @example false
     *
     * @var bool
     */
    public $withAttachmentInfo;
    protected $_name = [
        'attachResourceId' => 'attachResourceId',
        'attachResourceType' => 'attachResourceType',
        'gatewayId' => 'gatewayId',
        'gatewayType' => 'gatewayType',
        'includeBuiltinAiGateway' => 'includeBuiltinAiGateway',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pluginClassId' => 'pluginClassId',
        'pluginClassName' => 'pluginClassName',
        'withAttachmentInfo' => 'withAttachmentInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachResourceId) {
            $res['attachResourceId'] = $this->attachResourceId;
        }
        if (null !== $this->attachResourceType) {
            $res['attachResourceType'] = $this->attachResourceType;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }
        if (null !== $this->includeBuiltinAiGateway) {
            $res['includeBuiltinAiGateway'] = $this->includeBuiltinAiGateway;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pluginClassId) {
            $res['pluginClassId'] = $this->pluginClassId;
        }
        if (null !== $this->pluginClassName) {
            $res['pluginClassName'] = $this->pluginClassName;
        }
        if (null !== $this->withAttachmentInfo) {
            $res['withAttachmentInfo'] = $this->withAttachmentInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPluginsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attachResourceId'])) {
            $model->attachResourceId = $map['attachResourceId'];
        }
        if (isset($map['attachResourceType'])) {
            $model->attachResourceType = $map['attachResourceType'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }
        if (isset($map['includeBuiltinAiGateway'])) {
            $model->includeBuiltinAiGateway = $map['includeBuiltinAiGateway'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['pluginClassId'])) {
            $model->pluginClassId = $map['pluginClassId'];
        }
        if (isset($map['pluginClassName'])) {
            $model->pluginClassName = $map['pluginClassName'];
        }
        if (isset($map['withAttachmentInfo'])) {
            $model->withAttachmentInfo = $map['withAttachmentInfo'];
        }

        return $model;
    }
}

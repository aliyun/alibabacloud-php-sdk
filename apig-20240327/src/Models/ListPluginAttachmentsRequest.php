<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListPluginAttachmentsRequest extends Model
{
    /**
     * @example hr-cv2h58em1hkg7c6vt43g
     *
     * @var string
     */
    public $attachResourceId;

    /**
     * @example GatewayRoute
     *
     * @var string
     */
    public $attachResourceType;

    /**
     * @example GatewayRoute
     *
     * @var string
     */
    public $attachResourceTypes;

    /**
     * @example env-crlnqhtlhtgqflkqislg
     *
     * @var string
     */
    public $environmentId;

    /**
     * @example gw-cr79f75lhtgme744084g
     *
     * @var string
     */
    public $gatewayId;

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
     * @example pl-ct8181um1hkiqns9f6e0
     *
     * @var string
     */
    public $pluginId;

    /**
     * @example false
     *
     * @var bool
     */
    public $withParentResource;
    protected $_name = [
        'attachResourceId' => 'attachResourceId',
        'attachResourceType' => 'attachResourceType',
        'attachResourceTypes' => 'attachResourceTypes',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pluginId' => 'pluginId',
        'withParentResource' => 'withParentResource',
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
        if (null !== $this->attachResourceTypes) {
            $res['attachResourceTypes'] = $this->attachResourceTypes;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }
        if (null !== $this->withParentResource) {
            $res['withParentResource'] = $this->withParentResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPluginAttachmentsRequest
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
        if (isset($map['attachResourceTypes'])) {
            $model->attachResourceTypes = $map['attachResourceTypes'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }
        if (isset($map['withParentResource'])) {
            $model->withParentResource = $map['withParentResource'];
        }

        return $model;
    }
}

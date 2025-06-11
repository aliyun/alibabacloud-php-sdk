<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListPluginAttachmentsRequest extends Model
{
    /**
     * @var string
     */
    public $attachResourceId;

    /**
     * @var string
     */
    public $attachResourceType;

    /**
     * @var string
     */
    public $attachResourceTypes;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $gatewayId;

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
    public $pluginId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

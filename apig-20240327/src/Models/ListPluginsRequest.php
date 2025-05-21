<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListPluginsRequest extends Model
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
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayType;

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
    public $pluginClassId;

    /**
     * @var string
     */
    public $pluginClassName;

    /**
     * @var bool
     */
    public $withAttachmentInfo;
    protected $_name = [
        'attachResourceId' => 'attachResourceId',
        'attachResourceType' => 'attachResourceType',
        'gatewayId' => 'gatewayId',
        'gatewayType' => 'gatewayType',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pluginClassId' => 'pluginClassId',
        'pluginClassName' => 'pluginClassName',
        'withAttachmentInfo' => 'withAttachmentInfo',
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

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
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

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
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

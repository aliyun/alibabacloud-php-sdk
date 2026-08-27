<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListGlobalPoliciesRequest extends Model
{
    /**
     * @var string
     */
    public $attachResourceType;

    /**
     * @var string
     */
    public $className;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $globalPolicyType;

    /**
     * @var string
     */
    public $ipAccessControlContent;

    /**
     * @var string
     */
    public $ipAccessControlProtocolLayer;

    /**
     * @var string
     */
    public $ipAccessControlResourceName;

    /**
     * @var string
     */
    public $ipAccessControlType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'attachResourceType' => 'attachResourceType',
        'className' => 'className',
        'enable' => 'enable',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'globalPolicyType' => 'globalPolicyType',
        'ipAccessControlContent' => 'ipAccessControlContent',
        'ipAccessControlProtocolLayer' => 'ipAccessControlProtocolLayer',
        'ipAccessControlResourceName' => 'ipAccessControlResourceName',
        'ipAccessControlType' => 'ipAccessControlType',
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachResourceType) {
            $res['attachResourceType'] = $this->attachResourceType;
        }

        if (null !== $this->className) {
            $res['className'] = $this->className;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->globalPolicyType) {
            $res['globalPolicyType'] = $this->globalPolicyType;
        }

        if (null !== $this->ipAccessControlContent) {
            $res['ipAccessControlContent'] = $this->ipAccessControlContent;
        }

        if (null !== $this->ipAccessControlProtocolLayer) {
            $res['ipAccessControlProtocolLayer'] = $this->ipAccessControlProtocolLayer;
        }

        if (null !== $this->ipAccessControlResourceName) {
            $res['ipAccessControlResourceName'] = $this->ipAccessControlResourceName;
        }

        if (null !== $this->ipAccessControlType) {
            $res['ipAccessControlType'] = $this->ipAccessControlType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['attachResourceType'])) {
            $model->attachResourceType = $map['attachResourceType'];
        }

        if (isset($map['className'])) {
            $model->className = $map['className'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['globalPolicyType'])) {
            $model->globalPolicyType = $map['globalPolicyType'];
        }

        if (isset($map['ipAccessControlContent'])) {
            $model->ipAccessControlContent = $map['ipAccessControlContent'];
        }

        if (isset($map['ipAccessControlProtocolLayer'])) {
            $model->ipAccessControlProtocolLayer = $map['ipAccessControlProtocolLayer'];
        }

        if (isset($map['ipAccessControlResourceName'])) {
            $model->ipAccessControlResourceName = $map['ipAccessControlResourceName'];
        }

        if (isset($map['ipAccessControlType'])) {
            $model->ipAccessControlType = $map['ipAccessControlType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}

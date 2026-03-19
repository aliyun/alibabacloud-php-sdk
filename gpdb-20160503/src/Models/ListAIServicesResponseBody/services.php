<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListAIServicesResponseBody;

use AlibabaCloud\Dara\Model;

class services extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $privateApiDevUrl;

    /**
     * @var string
     */
    public $privateWorkbenchUrl;

    /**
     * @var string
     */
    public $publicApiDevUrl;

    /**
     * @var string
     */
    public $publicWorkbenchUrl;

    /**
     * @var string
     */
    public $securityIpList;

    /**
     * @var string
     */
    public $serviceAccount;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'privateApiDevUrl' => 'PrivateApiDevUrl',
        'privateWorkbenchUrl' => 'PrivateWorkbenchUrl',
        'publicApiDevUrl' => 'PublicApiDevUrl',
        'publicWorkbenchUrl' => 'PublicWorkbenchUrl',
        'securityIpList' => 'SecurityIpList',
        'serviceAccount' => 'ServiceAccount',
        'serviceId' => 'ServiceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->privateApiDevUrl) {
            $res['PrivateApiDevUrl'] = $this->privateApiDevUrl;
        }

        if (null !== $this->privateWorkbenchUrl) {
            $res['PrivateWorkbenchUrl'] = $this->privateWorkbenchUrl;
        }

        if (null !== $this->publicApiDevUrl) {
            $res['PublicApiDevUrl'] = $this->publicApiDevUrl;
        }

        if (null !== $this->publicWorkbenchUrl) {
            $res['PublicWorkbenchUrl'] = $this->publicWorkbenchUrl;
        }

        if (null !== $this->securityIpList) {
            $res['SecurityIpList'] = $this->securityIpList;
        }

        if (null !== $this->serviceAccount) {
            $res['ServiceAccount'] = $this->serviceAccount;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PrivateApiDevUrl'])) {
            $model->privateApiDevUrl = $map['PrivateApiDevUrl'];
        }

        if (isset($map['PrivateWorkbenchUrl'])) {
            $model->privateWorkbenchUrl = $map['PrivateWorkbenchUrl'];
        }

        if (isset($map['PublicApiDevUrl'])) {
            $model->publicApiDevUrl = $map['PublicApiDevUrl'];
        }

        if (isset($map['PublicWorkbenchUrl'])) {
            $model->publicWorkbenchUrl = $map['PublicWorkbenchUrl'];
        }

        if (isset($map['SecurityIpList'])) {
            $model->securityIpList = $map['SecurityIpList'];
        }

        if (isset($map['ServiceAccount'])) {
            $model->serviceAccount = $map['ServiceAccount'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

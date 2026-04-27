<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudWebcallRequest extends Model
{
    /**
     * @var int
     */
    public $amd;

    /**
     * @var string
     */
    public $clid;

    /**
     * @var string
     */
    public $clidAreaCode;

    /**
     * @var string
     */
    public $clidGroup;

    /**
     * @var string
     */
    public $clidList;

    /**
     * @var string
     */
    public $crnId;

    /**
     * @var int
     */
    public $delay;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $expirTime;

    /**
     * @var int
     */
    public $ivrId;

    /**
     * @var int
     */
    public $multiTelDelay;

    /**
     * @var int
     */
    public $multiTelPush;

    /**
     * @var string
     */
    public $requestUniqueId;

    /**
     * @var int
     */
    public $retry;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $tel;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $userField;

    /**
     * @var string
     */
    public $vid;
    protected $_name = [
        'amd' => 'Amd',
        'clid' => 'Clid',
        'clidAreaCode' => 'ClidAreaCode',
        'clidGroup' => 'ClidGroup',
        'clidList' => 'ClidList',
        'crnId' => 'CrnId',
        'delay' => 'Delay',
        'enterpriseId' => 'EnterpriseId',
        'expirTime' => 'ExpirTime',
        'ivrId' => 'IvrId',
        'multiTelDelay' => 'MultiTelDelay',
        'multiTelPush' => 'MultiTelPush',
        'requestUniqueId' => 'RequestUniqueId',
        'retry' => 'Retry',
        'retryInterval' => 'RetryInterval',
        'tel' => 'Tel',
        'timeout' => 'Timeout',
        'userField' => 'UserField',
        'vid' => 'Vid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amd) {
            $res['Amd'] = $this->amd;
        }

        if (null !== $this->clid) {
            $res['Clid'] = $this->clid;
        }

        if (null !== $this->clidAreaCode) {
            $res['ClidAreaCode'] = $this->clidAreaCode;
        }

        if (null !== $this->clidGroup) {
            $res['ClidGroup'] = $this->clidGroup;
        }

        if (null !== $this->clidList) {
            $res['ClidList'] = $this->clidList;
        }

        if (null !== $this->crnId) {
            $res['CrnId'] = $this->crnId;
        }

        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->expirTime) {
            $res['ExpirTime'] = $this->expirTime;
        }

        if (null !== $this->ivrId) {
            $res['IvrId'] = $this->ivrId;
        }

        if (null !== $this->multiTelDelay) {
            $res['MultiTelDelay'] = $this->multiTelDelay;
        }

        if (null !== $this->multiTelPush) {
            $res['MultiTelPush'] = $this->multiTelPush;
        }

        if (null !== $this->requestUniqueId) {
            $res['RequestUniqueId'] = $this->requestUniqueId;
        }

        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }

        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }

        if (null !== $this->tel) {
            $res['Tel'] = $this->tel;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->userField) {
            $res['UserField'] = $this->userField;
        }

        if (null !== $this->vid) {
            $res['Vid'] = $this->vid;
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
        if (isset($map['Amd'])) {
            $model->amd = $map['Amd'];
        }

        if (isset($map['Clid'])) {
            $model->clid = $map['Clid'];
        }

        if (isset($map['ClidAreaCode'])) {
            $model->clidAreaCode = $map['ClidAreaCode'];
        }

        if (isset($map['ClidGroup'])) {
            $model->clidGroup = $map['ClidGroup'];
        }

        if (isset($map['ClidList'])) {
            $model->clidList = $map['ClidList'];
        }

        if (isset($map['CrnId'])) {
            $model->crnId = $map['CrnId'];
        }

        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['ExpirTime'])) {
            $model->expirTime = $map['ExpirTime'];
        }

        if (isset($map['IvrId'])) {
            $model->ivrId = $map['IvrId'];
        }

        if (isset($map['MultiTelDelay'])) {
            $model->multiTelDelay = $map['MultiTelDelay'];
        }

        if (isset($map['MultiTelPush'])) {
            $model->multiTelPush = $map['MultiTelPush'];
        }

        if (isset($map['RequestUniqueId'])) {
            $model->requestUniqueId = $map['RequestUniqueId'];
        }

        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }

        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }

        if (isset($map['Tel'])) {
            $model->tel = $map['Tel'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['UserField'])) {
            $model->userField = $map['UserField'];
        }

        if (isset($map['Vid'])) {
            $model->vid = $map['Vid'];
        }

        return $model;
    }
}

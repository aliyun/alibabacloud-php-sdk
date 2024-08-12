<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ReportUserFbAcIssueShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $fileListShrink;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $reservedA;

    /**
     * @var string
     */
    public $reservedB;

    /**
     * @var string
     */
    public $userEmail;
    protected $_name = [
        'account'        => 'Account',
        'clientVersion'  => 'ClientVersion',
        'errorMsg'       => 'ErrorMsg',
        'fileListShrink' => 'FileList',
        'instanceId'     => 'InstanceId',
        'labels'         => 'Labels',
        'reservedA'      => 'ReservedA',
        'reservedB'      => 'ReservedB',
        'userEmail'      => 'UserEmail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->fileListShrink) {
            $res['FileList'] = $this->fileListShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->reservedA) {
            $res['ReservedA'] = $this->reservedA;
        }
        if (null !== $this->reservedB) {
            $res['ReservedB'] = $this->reservedB;
        }
        if (null !== $this->userEmail) {
            $res['UserEmail'] = $this->userEmail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportUserFbAcIssueShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['FileList'])) {
            $model->fileListShrink = $map['FileList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['ReservedA'])) {
            $model->reservedA = $map['ReservedA'];
        }
        if (isset($map['ReservedB'])) {
            $model->reservedB = $map['ReservedB'];
        }
        if (isset($map['UserEmail'])) {
            $model->userEmail = $map['UserEmail'];
        }

        return $model;
    }
}

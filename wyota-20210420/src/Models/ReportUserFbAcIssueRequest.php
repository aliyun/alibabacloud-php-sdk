<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbAcIssueRequest\fileList;
use AlibabaCloud\Tea\Model;

class ReportUserFbAcIssueRequest extends Model
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
     * @var fileList[]
     */
    public $fileList;

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
        'account'       => 'Account',
        'clientVersion' => 'ClientVersion',
        'errorMsg'      => 'ErrorMsg',
        'fileList'      => 'FileList',
        'instanceId'    => 'InstanceId',
        'labels'        => 'Labels',
        'reservedA'     => 'ReservedA',
        'reservedB'     => 'ReservedB',
        'userEmail'     => 'UserEmail',
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
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ReportUserFbAcIssueRequest
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
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n               = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
                }
            }
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

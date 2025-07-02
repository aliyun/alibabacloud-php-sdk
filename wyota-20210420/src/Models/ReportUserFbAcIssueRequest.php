<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbAcIssueRequest\fileList;

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
        'account' => 'Account',
        'clientVersion' => 'ClientVersion',
        'errorMsg' => 'ErrorMsg',
        'fileList' => 'FileList',
        'instanceId' => 'InstanceId',
        'labels' => 'Labels',
        'reservedA' => 'ReservedA',
        'reservedB' => 'ReservedB',
        'userEmail' => 'UserEmail',
    ];

    public function validate()
    {
        if (\is_array($this->fileList)) {
            Model::validateArray($this->fileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->fileList)) {
                $res['FileList'] = [];
                $n1 = 0;
                foreach ($this->fileList as $item1) {
                    $res['FileList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['FileList'] as $item1) {
                    $model->fileList[$n1] = fileList::fromMap($item1);
                    ++$n1;
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

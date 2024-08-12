<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbAcIssuesResponseBody\data;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbAcIssuesResponseBody\data\issueDataList\fileList;
use AlibabaCloud\Tea\Model;

class issueDataList extends Model
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
    public $errorMessage;

    /**
     * @var fileList[]
     */
    public $fileList;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $issueId;

    /**
     * @var string
     */
    public $label;

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
        'errorMessage'  => 'ErrorMessage',
        'fileList'      => 'FileList',
        'gmtCreated'    => 'GmtCreated',
        'gmtModified'   => 'GmtModified',
        'instanceId'    => 'InstanceId',
        'issueId'       => 'IssueId',
        'label'         => 'Label',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->issueId) {
            $res['IssueId'] = $this->issueId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
     * @return issueDataList
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IssueId'])) {
            $model->issueId = $map['IssueId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
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

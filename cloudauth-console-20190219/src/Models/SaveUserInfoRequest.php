<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models;

use AlibabaCloud\Tea\Model;

class SaveUserInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $userGroupId;

    /**
     * @var int
     */
    public $birthday;

    /**
     * @var string
     */
    public $imageBase64;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $sex;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $certificateNo;

    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'userGroupId'     => 'UserGroupId',
        'birthday'        => 'Birthday',
        'imageBase64'     => 'ImageBase64',
        'groupName'       => 'GroupName',
        'imageUrl'        => 'ImageUrl',
        'sex'             => 'Sex',
        'userName'        => 'UserName',
        'certificateNo'   => 'CertificateNo',
        'phoneNo'         => 'PhoneNo',
        'certificateType' => 'CertificateType',
        'projectId'       => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->birthday) {
            $res['Birthday'] = $this->birthday;
        }
        if (null !== $this->imageBase64) {
            $res['ImageBase64'] = $this->imageBase64;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->certificateNo) {
            $res['CertificateNo'] = $this->certificateNo;
        }
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveUserInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['Birthday'])) {
            $model->birthday = $map['Birthday'];
        }
        if (isset($map['ImageBase64'])) {
            $model->imageBase64 = $map['ImageBase64'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['CertificateNo'])) {
            $model->certificateNo = $map['CertificateNo'];
        }
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

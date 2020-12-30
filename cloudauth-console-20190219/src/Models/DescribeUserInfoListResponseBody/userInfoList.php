<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeUserInfoListResponseBody;

use AlibabaCloud\Tea\Model;

class userInfoList extends Model
{
    /**
     * @var int
     */
    public $sex;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var int
     */
    public $birthday;

    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $identifyingImage;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $certificateNo;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'sex'              => 'Sex',
        'certificateType'  => 'CertificateType',
        'birthday'         => 'Birthday',
        'phoneNo'          => 'PhoneNo',
        'groupName'        => 'GroupName',
        'userGroupId'      => 'UserGroupId',
        'identifyingImage' => 'IdentifyingImage',
        'userName'         => 'UserName',
        'certificateNo'    => 'CertificateNo',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->birthday) {
            $res['Birthday'] = $this->birthday;
        }
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->identifyingImage) {
            $res['IdentifyingImage'] = $this->identifyingImage;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->certificateNo) {
            $res['CertificateNo'] = $this->certificateNo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['Birthday'])) {
            $model->birthday = $map['Birthday'];
        }
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['IdentifyingImage'])) {
            $model->identifyingImage = $map['IdentifyingImage'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['CertificateNo'])) {
            $model->certificateNo = $map['CertificateNo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class UpdateSmsSignShrinkRequest extends Model
{
    /**
     * @description Application scenarios, instructions as follows:
     * - For e-commerce platform store names (for enterprise users only), provide the display link with HTTP or HTTPS.
     * @example http://www.aliyun.com/
     *
     * @var string
     */
    public $applySceneContent;

    /**
     * @description Additional materials, such as uploading business proof documents or screenshots of business operations, to help reviewers understand your business details.
     *
     * @var string
     */
    public $moreDataShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Approved or under-review qualification ID.
     *
     * This parameter is required.
     * @example 8563**
     *
     * @var int
     */
    public $qualificationId;

    /**
     * @description Explanation of the SMS signature scenario, with a maximum length of 200 characters.
     *
     * > The scenario explanation is one of the reference information for signature review. Please provide a detailed description of the usage scenarios of the launched business, along with verifiable information such as website links, registered domain addresses, app store download links, full names of public accounts or mini-programs, etc. For login scenarios, test account credentials are also required. A well-informed application explanation will enhance the efficiency of signature and template reviews. Refer to the **Application Scenarios** column in the [Signature Source](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.i2#section-xup-k46-yi4) table for filling in SMS scenarios.
     * @example 登录场景申请验证码
     *
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Signature not yet approved.
     *
     * This parameter is required.
     * @example 阿里云验证码
     *
     * @var string
     */
    public $signName;

    /**
     * @description Source of the signature. Values:
     *
     * - **0**: Full name or abbreviation of enterprises and institutions.
     * - **1**: Full name or abbreviation of MIIT-registered websites.
     * - **2**: Full name or abbreviation of app applications.
     * - **3**: Full name or abbreviation of public accounts or mini-programs.
     * - **4**: Full name or abbreviation of e-commerce platform store names.
     * - **5**: Full name or abbreviation of trademarks.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $signSource;

    /**
     * @description Signature type. It is recommended to use the default value.
     *
     * - **0**: Verification code
     * - **1**: General (default)
     * @example 1
     *
     * @var int
     */
    public $signType;

    /**
     * @description Whether the signature is for self-use or others.
     *
     * >Notice: When the signature is for self-use, select the self-use qualification ID; when it\\"s for others, choose the others\\" qualification ID.
     * @example false
     *
     * @var bool
     */
    public $thirdParty;
    protected $_name = [
        'applySceneContent'    => 'ApplySceneContent',
        'moreDataShrink'       => 'MoreData',
        'ownerId'              => 'OwnerId',
        'qualificationId'      => 'QualificationId',
        'remark'               => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'signName'             => 'SignName',
        'signSource'           => 'SignSource',
        'signType'             => 'SignType',
        'thirdParty'           => 'ThirdParty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applySceneContent) {
            $res['ApplySceneContent'] = $this->applySceneContent;
        }
        if (null !== $this->moreDataShrink) {
            $res['MoreData'] = $this->moreDataShrink;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signSource) {
            $res['SignSource'] = $this->signSource;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }
        if (null !== $this->thirdParty) {
            $res['ThirdParty'] = $this->thirdParty;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSmsSignShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplySceneContent'])) {
            $model->applySceneContent = $map['ApplySceneContent'];
        }
        if (isset($map['MoreData'])) {
            $model->moreDataShrink = $map['MoreData'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignSource'])) {
            $model->signSource = $map['SignSource'];
        }
        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }
        if (isset($map['ThirdParty'])) {
            $model->thirdParty = $map['ThirdParty'];
        }

        return $model;
    }
}

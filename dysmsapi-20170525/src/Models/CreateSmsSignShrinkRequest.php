<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateSmsSignShrinkRequest extends Model
{
    /**
     * @description Application scenarios, instructions as follows:
     * - For e-commerce platform store names, applicable only to enterprise users, provide a display link with HTTP or HTTPS for the store.
     * @example http://www.aliyun.com/
     *
     * @var string
     */
    public $applySceneContent;

    /**
     * @description Additional information to supplement uploaded business proof documents or screenshots, which helps reviewers understand your business details.
     *
     * This parameter is optional; please fill it out based on your actual needs.
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
     * > The scenario explanation is one of the reference materials for signature review. Please provide a detailed description of the usage scenarios for your live services, along with links to verify these services such as website URLs with MIIT备案, app store display links, full names of public accounts or mini-programs, etc. For login scenarios, test account credentials are also required. A comprehensive application explanation enhances the efficiency of signature and template reviews. Refer to the **Application Scenario** column in the [Signature Source](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.i2#section-xup-k46-yi4) table for filling in SMS scenarios.
     * @example SMS signature for the login scenario using verification code.
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
     * @description Signature name. Please adhere to the [Signature Specifications](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.0.4f9710fder2gR7#section-0p8-qn8-mmy).
     *
     * This parameter is required.
     * @example Aliyun
     *
     * @var string
     */
    public $signName;

    /**
     * @description Signature source. Values:
     *
     * - **0**: Full name or abbreviation of an enterprise or institution.
     * - **1**: Full name or abbreviation of a MIIT-registered website.
     * - **2**: Full name or abbreviation of an App.
     * - **3**: Full name or abbreviation of an official account or mini-program.
     * - **4**: Full name or abbreviation of an e-commerce platform store.
     * - **5**: Full name or abbreviation of a trademark.
     *
     * For detailed information on signature sources, refer to [Signature Source](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.0.4f9710fder2gR7#section-xup-k46-yi4).
     *
     * > This interface does not support applying for signatures with sources as **Test or Learning** and **Trial Use**. If you need to apply for signatures with these sources, please go to the [SMS Service Console](https://dysms.console.aliyun.com/domestic/text/sign/add/qualification).
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $signSource;

    /**
     * @description Signature type. Values:
     *
     * - **0**: Verification Code
     *
     * - **1**: General (Default)
     *
     * > It is recommended to use the default value: **General**.
     * @example 1
     *
     * @var int
     */
    public $signType;

    /**
     * @description Choose whether the applied signature is for self-use or third-party use.
     *
     * >Notice: Please select self-use qualification ID when the signature is for self-use; choose third-party use qualification ID when it\\"s for third-party use.
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
     * @return CreateSmsSignShrinkRequest
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

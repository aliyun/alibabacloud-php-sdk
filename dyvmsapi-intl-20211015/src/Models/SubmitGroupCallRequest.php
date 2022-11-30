<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models;

use AlibabaCloud\Tea\Model;

class SubmitGroupCallRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $callerIdNumber;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $groupCallType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $sendType;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $timingStart;
    protected $_name = [
        'bizType'              => 'BizType',
        'callerIdNumber'       => 'CallerIdNumber',
        'countryId'            => 'CountryId',
        'fileKey'              => 'FileKey',
        'fileName'             => 'FileName',
        'groupCallType'        => 'GroupCallType',
        'ownerId'              => 'OwnerId',
        'productCode'          => 'ProductCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sendType'             => 'SendType',
        'taskName'             => 'TaskName',
        'templateId'           => 'TemplateId',
        'timingStart'          => 'TimingStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->callerIdNumber) {
            $res['CallerIdNumber'] = $this->callerIdNumber;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->groupCallType) {
            $res['GroupCallType'] = $this->groupCallType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sendType) {
            $res['SendType'] = $this->sendType;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->timingStart) {
            $res['TimingStart'] = $this->timingStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitGroupCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CallerIdNumber'])) {
            $model->callerIdNumber = $map['CallerIdNumber'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['GroupCallType'])) {
            $model->groupCallType = $map['GroupCallType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SendType'])) {
            $model->sendType = $map['SendType'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TimingStart'])) {
            $model->timingStart = $map['TimingStart'];
        }

        return $model;
    }
}

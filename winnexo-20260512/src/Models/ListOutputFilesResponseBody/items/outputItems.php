<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponseBody\items\outputItems\emailInfo;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponseBody\items\outputItems\fileInfo;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponseBody\items\outputItems\slidesInfo;

class outputItems extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var emailInfo
     */
    public $emailInfo;

    /**
     * @var fileInfo
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $itemTypeDisplayName;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $outputItemId;

    /**
     * @var bool
     */
    public $shareEnabled;

    /**
     * @var string
     */
    public $shareToken;

    /**
     * @var string
     */
    public $skillOutputId;

    /**
     * @var slidesInfo
     */
    public $slidesInfo;

    /**
     * @var string
     */
    public $taskExecutionId;
    protected $_name = [
        'createTime' => 'createTime',
        'emailInfo' => 'emailInfo',
        'fileInfo' => 'fileInfo',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'itemName' => 'itemName',
        'itemType' => 'itemType',
        'itemTypeDisplayName' => 'itemTypeDisplayName',
        'messageId' => 'messageId',
        'outputItemId' => 'outputItemId',
        'shareEnabled' => 'shareEnabled',
        'shareToken' => 'shareToken',
        'skillOutputId' => 'skillOutputId',
        'slidesInfo' => 'slidesInfo',
        'taskExecutionId' => 'taskExecutionId',
    ];

    public function validate()
    {
        if (null !== $this->emailInfo) {
            $this->emailInfo->validate();
        }
        if (null !== $this->fileInfo) {
            $this->fileInfo->validate();
        }
        if (null !== $this->slidesInfo) {
            $this->slidesInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->emailInfo) {
            $res['emailInfo'] = null !== $this->emailInfo ? $this->emailInfo->toArray($noStream) : $this->emailInfo;
        }

        if (null !== $this->fileInfo) {
            $res['fileInfo'] = null !== $this->fileInfo ? $this->fileInfo->toArray($noStream) : $this->fileInfo;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->itemName) {
            $res['itemName'] = $this->itemName;
        }

        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }

        if (null !== $this->itemTypeDisplayName) {
            $res['itemTypeDisplayName'] = $this->itemTypeDisplayName;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->outputItemId) {
            $res['outputItemId'] = $this->outputItemId;
        }

        if (null !== $this->shareEnabled) {
            $res['shareEnabled'] = $this->shareEnabled;
        }

        if (null !== $this->shareToken) {
            $res['shareToken'] = $this->shareToken;
        }

        if (null !== $this->skillOutputId) {
            $res['skillOutputId'] = $this->skillOutputId;
        }

        if (null !== $this->slidesInfo) {
            $res['slidesInfo'] = null !== $this->slidesInfo ? $this->slidesInfo->toArray($noStream) : $this->slidesInfo;
        }

        if (null !== $this->taskExecutionId) {
            $res['taskExecutionId'] = $this->taskExecutionId;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['emailInfo'])) {
            $model->emailInfo = emailInfo::fromMap($map['emailInfo']);
        }

        if (isset($map['fileInfo'])) {
            $model->fileInfo = fileInfo::fromMap($map['fileInfo']);
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['itemName'])) {
            $model->itemName = $map['itemName'];
        }

        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }

        if (isset($map['itemTypeDisplayName'])) {
            $model->itemTypeDisplayName = $map['itemTypeDisplayName'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['outputItemId'])) {
            $model->outputItemId = $map['outputItemId'];
        }

        if (isset($map['shareEnabled'])) {
            $model->shareEnabled = $map['shareEnabled'];
        }

        if (isset($map['shareToken'])) {
            $model->shareToken = $map['shareToken'];
        }

        if (isset($map['skillOutputId'])) {
            $model->skillOutputId = $map['skillOutputId'];
        }

        if (isset($map['slidesInfo'])) {
            $model->slidesInfo = slidesInfo::fromMap($map['slidesInfo']);
        }

        if (isset($map['taskExecutionId'])) {
            $model->taskExecutionId = $map['taskExecutionId'];
        }

        return $model;
    }
}

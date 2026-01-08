<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListCustomAudienceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $adAccountId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $customAudienceId;

    /**
     * @var string
     */
    public $customAudienceName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $pageId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $tokenTotal;

    /**
     * @var string
     */
    public $tokenType;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'adAccountId' => 'AdAccountId',
        'createTime' => 'CreateTime',
        'customAudienceId' => 'CustomAudienceId',
        'customAudienceName' => 'CustomAudienceName',
        'description' => 'Description',
        'pageId' => 'PageId',
        'status' => 'Status',
        'tokenTotal' => 'TokenTotal',
        'tokenType' => 'TokenType',
        'updateTime' => 'UpdateTime',
        'uploadType' => 'UploadType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adAccountId) {
            $res['AdAccountId'] = $this->adAccountId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customAudienceId) {
            $res['CustomAudienceId'] = $this->customAudienceId;
        }

        if (null !== $this->customAudienceName) {
            $res['CustomAudienceName'] = $this->customAudienceName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tokenTotal) {
            $res['TokenTotal'] = $this->tokenTotal;
        }

        if (null !== $this->tokenType) {
            $res['TokenType'] = $this->tokenType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
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
        if (isset($map['AdAccountId'])) {
            $model->adAccountId = $map['AdAccountId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomAudienceId'])) {
            $model->customAudienceId = $map['CustomAudienceId'];
        }

        if (isset($map['CustomAudienceName'])) {
            $model->customAudienceName = $map['CustomAudienceName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TokenTotal'])) {
            $model->tokenTotal = $map['TokenTotal'];
        }

        if (isset($map['TokenType'])) {
            $model->tokenType = $map['TokenType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }

        return $model;
    }
}

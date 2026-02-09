<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGameReviewByStatusResponseBody\resultContent\content;

use AlibabaCloud\Dara\Model;

class targetDetail extends Model
{
    /**
     * @var bool
     */
    public $autoOnline;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $gameMaker;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $miniProgramCode;

    /**
     * @var int
     */
    public $miniProgramInfoId;

    /**
     * @var string
     */
    public $miniProgramName;

    /**
     * @var int
     */
    public $miniResourceId;

    /**
     * @var int
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $qrCodeUrl;

    /**
     * @var string
     */
    public $reviewTargetType;

    /**
     * @var int
     */
    public $subType;

    /**
     * @var int
     */
    public $targetId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'autoOnline' => 'AutoOnline',
        'category' => 'Category',
        'detail' => 'Detail',
        'gameMaker' => 'GameMaker',
        'iconUrl' => 'IconUrl',
        'introduction' => 'Introduction',
        'miniProgramCode' => 'MiniProgramCode',
        'miniProgramInfoId' => 'MiniProgramInfoId',
        'miniProgramName' => 'MiniProgramName',
        'miniResourceId' => 'MiniResourceId',
        'publishStatus' => 'PublishStatus',
        'qrCodeUrl' => 'QrCodeUrl',
        'reviewTargetType' => 'ReviewTargetType',
        'subType' => 'SubType',
        'targetId' => 'TargetId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoOnline) {
            $res['AutoOnline'] = $this->autoOnline;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->gameMaker) {
            $res['GameMaker'] = $this->gameMaker;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }

        if (null !== $this->miniProgramCode) {
            $res['MiniProgramCode'] = $this->miniProgramCode;
        }

        if (null !== $this->miniProgramInfoId) {
            $res['MiniProgramInfoId'] = $this->miniProgramInfoId;
        }

        if (null !== $this->miniProgramName) {
            $res['MiniProgramName'] = $this->miniProgramName;
        }

        if (null !== $this->miniResourceId) {
            $res['MiniResourceId'] = $this->miniResourceId;
        }

        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }

        if (null !== $this->qrCodeUrl) {
            $res['QrCodeUrl'] = $this->qrCodeUrl;
        }

        if (null !== $this->reviewTargetType) {
            $res['ReviewTargetType'] = $this->reviewTargetType;
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AutoOnline'])) {
            $model->autoOnline = $map['AutoOnline'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['GameMaker'])) {
            $model->gameMaker = $map['GameMaker'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }

        if (isset($map['MiniProgramCode'])) {
            $model->miniProgramCode = $map['MiniProgramCode'];
        }

        if (isset($map['MiniProgramInfoId'])) {
            $model->miniProgramInfoId = $map['MiniProgramInfoId'];
        }

        if (isset($map['MiniProgramName'])) {
            $model->miniProgramName = $map['MiniProgramName'];
        }

        if (isset($map['MiniResourceId'])) {
            $model->miniResourceId = $map['MiniResourceId'];
        }

        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }

        if (isset($map['QrCodeUrl'])) {
            $model->qrCodeUrl = $map['QrCodeUrl'];
        }

        if (isset($map['ReviewTargetType'])) {
            $model->reviewTargetType = $map['ReviewTargetType'];
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class AddLiveAIProduceRulesRequest extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $isLazy;

    /**
     * @var string
     */
    public $liveTemplate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $studioName;

    /**
     * @var string
     */
    public $subtitleName;

    /**
     * @var string
     */
    public $suffix;
    protected $_name = [
        'app' => 'App',
        'description' => 'Description',
        'domain' => 'Domain',
        'isLazy' => 'IsLazy',
        'liveTemplate' => 'LiveTemplate',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'studioName' => 'StudioName',
        'subtitleName' => 'SubtitleName',
        'suffix' => 'Suffix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->isLazy) {
            $res['IsLazy'] = $this->isLazy;
        }

        if (null !== $this->liveTemplate) {
            $res['LiveTemplate'] = $this->liveTemplate;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->studioName) {
            $res['StudioName'] = $this->studioName;
        }

        if (null !== $this->subtitleName) {
            $res['SubtitleName'] = $this->subtitleName;
        }

        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
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
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['IsLazy'])) {
            $model->isLazy = $map['IsLazy'];
        }

        if (isset($map['LiveTemplate'])) {
            $model->liveTemplate = $map['LiveTemplate'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StudioName'])) {
            $model->studioName = $map['StudioName'];
        }

        if (isset($map['SubtitleName'])) {
            $model->subtitleName = $map['SubtitleName'];
        }

        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }

        return $model;
    }
}

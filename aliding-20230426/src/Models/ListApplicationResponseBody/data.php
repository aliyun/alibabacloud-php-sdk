<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appConfig;
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $applicationStatus;
    /**
     * @var string
     */
    public $corpId;
    /**
     * @var string
     */
    public $creatorUserId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $icon;
    /**
     * @var string
     */
    public $inexistence;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'appConfig'         => 'AppConfig',
        'appType'           => 'AppType',
        'applicationStatus' => 'ApplicationStatus',
        'corpId'            => 'CorpId',
        'creatorUserId'     => 'CreatorUserId',
        'description'       => 'Description',
        'icon'              => 'Icon',
        'inexistence'       => 'Inexistence',
        'name'              => 'Name',
        'subCorpId'         => 'SubCorpId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->applicationStatus) {
            $res['ApplicationStatus'] = $this->applicationStatus;
        }

        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->inexistence) {
            $res['Inexistence'] = $this->inexistence;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->subCorpId) {
            $res['SubCorpId'] = $this->subCorpId;
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
        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['ApplicationStatus'])) {
            $model->applicationStatus = $map['ApplicationStatus'];
        }

        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Inexistence'])) {
            $model->inexistence = $map['Inexistence'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SubCorpId'])) {
            $model->subCorpId = $map['SubCorpId'];
        }

        return $model;
    }
}

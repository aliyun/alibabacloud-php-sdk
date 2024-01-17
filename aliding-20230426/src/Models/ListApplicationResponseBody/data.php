<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {\"ODIN_TOPIC_ID\":\"256\"}
     *
     * @var string
     */
    public $appConfig;

    /**
     * @example APP_XCxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $applicationStatus;

    /**
     * @example ding5xxx
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $creatorUserId;

    /**
     * @example 小明创建的宜搭应用
     *
     * @var string
     */
    public $description;

    /**
     * @example appdiqiu%%#0089FF
     *
     * @var string
     */
    public $icon;

    /**
     * @example y
     *
     * @var string
     */
    public $inexistence;

    /**
     * @example app
     *
     * @var string
     */
    public $name;

    /**
     * @example ding5xxx
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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

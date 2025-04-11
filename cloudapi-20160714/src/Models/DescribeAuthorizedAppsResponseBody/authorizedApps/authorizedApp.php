<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponseBody\authorizedApps;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponseBody\authorizedApps\authorizedApp\tag;

class authorizedApp extends Model
{
    /**
     * @var string
     */
    public $appDescription;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $authVaildTime;

    /**
     * @var string
     */
    public $authorizationSource;

    /**
     * @var string
     */
    public $authorizedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $stageAlias;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var tag
     */
    public $tag;
    protected $_name = [
        'appDescription' => 'AppDescription',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'authVaildTime' => 'AuthVaildTime',
        'authorizationSource' => 'AuthorizationSource',
        'authorizedTime' => 'AuthorizedTime',
        'description' => 'Description',
        'operator' => 'Operator',
        'stageAlias' => 'StageAlias',
        'stageName' => 'StageName',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (null !== $this->tag) {
            $this->tag->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->authVaildTime) {
            $res['AuthVaildTime'] = $this->authVaildTime;
        }

        if (null !== $this->authorizationSource) {
            $res['AuthorizationSource'] = $this->authorizationSource;
        }

        if (null !== $this->authorizedTime) {
            $res['AuthorizedTime'] = $this->authorizedTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->stageAlias) {
            $res['StageAlias'] = $this->stageAlias;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toArray($noStream) : $this->tag;
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
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AuthVaildTime'])) {
            $model->authVaildTime = $map['AuthVaildTime'];
        }

        if (isset($map['AuthorizationSource'])) {
            $model->authorizationSource = $map['AuthorizationSource'];
        }

        if (isset($map['AuthorizedTime'])) {
            $model->authorizedTime = $map['AuthorizedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['StageAlias'])) {
            $model->stageAlias = $map['StageAlias'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }

        return $model;
    }
}

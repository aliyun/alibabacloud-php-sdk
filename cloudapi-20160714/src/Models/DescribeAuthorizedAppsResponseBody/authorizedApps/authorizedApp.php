<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponseBody\authorizedApps;

use AlibabaCloud\Tea\Model;

class authorizedApp extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $authorizationSource;

    /**
     * @var string
     */
    public $authVaildTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $authorizedTime;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'appName'             => 'AppName',
        'authorizationSource' => 'AuthorizationSource',
        'authVaildTime'       => 'AuthVaildTime',
        'description'         => 'Description',
        'authorizedTime'      => 'AuthorizedTime',
        'appId'               => 'AppId',
        'stageName'           => 'StageName',
        'operator'            => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->authorizationSource) {
            $res['AuthorizationSource'] = $this->authorizationSource;
        }
        if (null !== $this->authVaildTime) {
            $res['AuthVaildTime'] = $this->authVaildTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->authorizedTime) {
            $res['AuthorizedTime'] = $this->authorizedTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedApp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AuthorizationSource'])) {
            $model->authorizationSource = $map['AuthorizationSource'];
        }
        if (isset($map['AuthVaildTime'])) {
            $model->authVaildTime = $map['AuthVaildTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AuthorizedTime'])) {
            $model->authorizedTime = $map['AuthorizedTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}

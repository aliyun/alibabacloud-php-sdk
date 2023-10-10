<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponseBody\packageVersionList;

use AlibabaCloud\Tea\Model;

class packageVersion extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-****-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the deployment package was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573627440892
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the deployment package.
     *
     * @example deploy
     *
     * @var string
     */
    public $description;

    /**
     * @description The unique ID of the deployment package.
     *
     * @example 441beb18-da42-44dc-****-************
     *
     * @var string
     */
    public $id;

    /**
     * @description The version of the application that was released by using the deployment package. This version can be used to call the RollbackApplication operation.
     *
     * @example 1.0
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description The URL of the deployment package.
     *
     * @example http://edas-sz.oss-cn-shenzhen**********\/SPRING_CLOUD_PROVIDER.jar
     *
     * @var string
     */
    public $publicUrl;

    /**
     * @description The deployment mode of the application. Valid values:
     *
     *   url: The application is deployed by using a JAR or WAR package.
     *   image: The application is deployed by using an image.
     *
     * @example url
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the deployment package was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573627440892
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The URL of the deployment package.
     *
     * @example http://edas-sz.oss-cn-shenzhen**********\/SPRING_CLOUD_PROVIDER.jar
     *
     * @var string
     */
    public $warUrl;
    protected $_name = [
        'appId'          => 'AppId',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'id'             => 'Id',
        'packageVersion' => 'PackageVersion',
        'publicUrl'      => 'PublicUrl',
        'type'           => 'Type',
        'updateTime'     => 'UpdateTime',
        'warUrl'         => 'WarUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->warUrl) {
            $res['WarUrl'] = $this->warUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['WarUrl'])) {
            $model->warUrl = $map['WarUrl'];
        }

        return $model;
    }
}

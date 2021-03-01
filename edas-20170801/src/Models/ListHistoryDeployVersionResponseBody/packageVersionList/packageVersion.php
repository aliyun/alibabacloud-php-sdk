<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponseBody\packageVersionList;

use AlibabaCloud\Tea\Model;

class packageVersion extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $publicUrl;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $warUrl;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $packageVersion;
    protected $_name = [
        'type'           => 'Type',
        'publicUrl'      => 'PublicUrl',
        'updateTime'     => 'UpdateTime',
        'description'    => 'Description',
        'createTime'     => 'CreateTime',
        'appId'          => 'AppId',
        'warUrl'         => 'WarUrl',
        'id'             => 'Id',
        'packageVersion' => 'PackageVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->warUrl) {
            $res['WarUrl'] = $this->warUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['WarUrl'])) {
            $model->warUrl = $map['WarUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }

        return $model;
    }
}

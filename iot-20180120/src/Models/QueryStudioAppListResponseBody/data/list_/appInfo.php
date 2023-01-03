<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class appInfo extends Model
{
    /**
     * @example a123********
     *
     * @var string
     */
    public $appId;

    /**
     * @example 322******
     *
     * @var string
     */
    public $appKey;

    /**
     * @example a605*******
     *
     * @var string
     */
    public $appSecret;

    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @example 2020-12-25 16:20:53
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-04-10 15:06:23
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 2021-04-15 19:11:32
     *
     * @var string
     */
    public $gmtRelease;

    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example a123********
     *
     * @var string
     */
    public $projectId;

    /**
     * @example webApp
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'       => 'AppId',
        'appKey'      => 'AppKey',
        'appSecret'   => 'AppSecret',
        'description' => 'Description',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'gmtRelease'  => 'GmtRelease',
        'name'        => 'Name',
        'projectId'   => 'ProjectId',
        'type'        => 'Type',
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
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtRelease) {
            $res['GmtRelease'] = $this->gmtRelease;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtRelease'])) {
            $model->gmtRelease = $map['GmtRelease'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

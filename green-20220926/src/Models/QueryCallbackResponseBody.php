<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class QueryCallbackResponseBody extends Model
{
    /**
     * @example SHA256
     *
     * @var string
     */
    public $cryptType;

    /**
     * @example false
     *
     * @var bool
     */
    public $existsOssCheckTask;

    /**
     * @example 2022-11-30 16:30:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-06-03 15:20:14
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 11234
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example all
     *
     * @var string
     */
    public $scope;

    /**
     * @description Seed。
     *
     * @example cb2MysbJTAAIf6gB3u4vpIEU-1ySnnf
     *
     * @var string
     */
    public $seed;

    /**
     * @description UID。
     *
     * @example 19964*****086772
     *
     * @var string
     */
    public $uid;

    /**
     * @example https://www.aliyuncs.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'cryptType' => 'CryptType',
        'existsOssCheckTask' => 'ExistsOssCheckTask',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'scope' => 'Scope',
        'seed' => 'Seed',
        'uid' => 'Uid',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cryptType) {
            $res['CryptType'] = $this->cryptType;
        }
        if (null !== $this->existsOssCheckTask) {
            $res['ExistsOssCheckTask'] = $this->existsOssCheckTask;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCallbackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CryptType'])) {
            $model->cryptType = $map['CryptType'];
        }
        if (isset($map['ExistsOssCheckTask'])) {
            $model->existsOssCheckTask = $map['ExistsOssCheckTask'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

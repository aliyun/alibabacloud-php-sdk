<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackByPageResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example SHA256
     *
     * @var string
     */
    public $cryptType;

    /**
     * @example 2024-06-03 15:20:14
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
     * @example 1697
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example all
     *
     * @var string
     */
    public $scope;

    /**
     * @description Seed。
     *
     * @example cb6gYS8GXj4Vn4Y4FN0Y8R5M-1x46Mq
     *
     * @var string
     */
    public $seed;

    /**
     * @description UID。
     *
     * @example 12161*****398900
     *
     * @var string
     */
    public $uid;

    /**
     * @example https://console.aliyun.com/
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'cryptType' => 'CryptType',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
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
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CryptType'])) {
            $model->cryptType = $map['CryptType'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class ModifyCallbackRequest extends Model
{
    /**
     * @example SHA256
     *
     * @var string
     */
    public $cryptType;

    /**
     * @description This parameter is required.
     *
     * @example 112
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example all
     *
     * @var string
     */
    public $scope;

    /**
     * @example https://www.aliyuncs.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'cryptType' => 'CryptType',
        'id' => 'Id',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'scope' => 'Scope',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cryptType) {
            $res['CryptType'] = $this->cryptType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CryptType'])) {
            $model->cryptType = $map['CryptType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

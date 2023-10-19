<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyAppRequest\tag;
use AlibabaCloud\Tea\Model;

class ModifyAppRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 20112314518278
     *
     * @var int
     */
    public $appId;

    /**
     * @description The ID must be 4 to 26 characters in length and can contain letters, digits, and underscores (\_). It must start with a letter.
     *
     * If you do not want to modify the existing value, do not specify this parameter.
     * @example jiedian_pord
     *
     * @var string
     */
    public $appName;

    /**
     * @description The description of the application. The description can be up to 180 characters in length.
     *
     * If you do not want to modify the existing value, do not specify this parameter.
     * @example modidyTest
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The tag of objects that match the rule. You can specify multiple tags.
     *
     * @example Key， Value
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'appId'         => 'AppId',
        'appName'       => 'AppName',
        'description'   => 'Description',
        'extend'        => 'Extend',
        'securityToken' => 'SecurityToken',
        'tag'           => 'Tag',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

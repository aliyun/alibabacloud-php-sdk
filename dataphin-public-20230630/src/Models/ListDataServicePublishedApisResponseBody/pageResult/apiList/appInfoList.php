<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServicePublishedApisResponseBody\pageResult\apiList;

use AlibabaCloud\Tea\Model;

class appInfoList extends Model
{
    /**
     * @example 10211
     *
     * @var int
     */
    public $appId;

    /**
     * @description appKey
     *
     * @example 1201
     *
     * @var int
     */
    public $appKey;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;
    protected $_name = [
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfoList
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}

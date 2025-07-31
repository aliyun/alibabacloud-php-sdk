<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiErrorImpactResponseBody\data;

use AlibabaCloud\Tea\Model;

class errorAppList extends Model
{
    /**
     * @description appId
     *
     * @example 1021
     *
     * @var int
     */
    public $appId;

    /**
     * @description appKey
     *
     * @example 100211
     *
     * @var int
     */
    public $appKey;

    /**
     * @example app1
     *
     * @var string
     */
    public $appName;

    /**
     * @example 10
     *
     * @var int
     */
    public $errorCount;
    protected $_name = [
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'errorCount' => 'ErrorCount',
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
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorAppList
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
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }

        return $model;
    }
}

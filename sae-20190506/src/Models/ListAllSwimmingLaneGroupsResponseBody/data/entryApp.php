<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class entryApp extends Model
{
    /**
     * @example 09805e5d-9b8d-42cd-9442-03c498******
     *
     * @var string
     */
    public $appId;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @example mse
     *
     * @var string
     */
    public $appType;

    /**
     * @example mse-cn-53y49******
     *
     * @var string
     */
    public $mseAppId;

    /**
     * @example test
     *
     * @var string
     */
    public $mseAppName;

    /**
     * @example demo
     *
     * @var string
     */
    public $mseNamespaceId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'mseAppId' => 'MseAppId',
        'mseAppName' => 'MseAppName',
        'mseNamespaceId' => 'MseNamespaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->mseAppId) {
            $res['MseAppId'] = $this->mseAppId;
        }
        if (null !== $this->mseAppName) {
            $res['MseAppName'] = $this->mseAppName;
        }
        if (null !== $this->mseNamespaceId) {
            $res['MseNamespaceId'] = $this->mseNamespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entryApp
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['MseAppId'])) {
            $model->mseAppId = $map['MseAppId'];
        }
        if (isset($map['MseAppName'])) {
            $model->mseAppName = $map['MseAppName'];
        }
        if (isset($map['MseNamespaceId'])) {
            $model->mseNamespaceId = $map['MseNamespaceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data;

use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @example 8ea0c468-8165-416d-beae-531abb******
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
     * @example mse-cn-53y49******
     *
     * @var string
     */
    public $mseAppId;

    /**
     * @example sae-test
     *
     * @var string
     */
    public $mseAppName;

    /**
     * @example space
     *
     * @var string
     */
    public $mseNamespaceId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
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
     * @return apps
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetApplicationRequest extends Model
{
    /**
     * @description The application ID.
     *
     * @example 017f39b8-dfa4-4e16-a84b-1dcee4b1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'namespaceId' => 'NamespaceId',
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
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationRequest
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}

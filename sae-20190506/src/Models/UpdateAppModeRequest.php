<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppModeRequest extends Model
{
    /**
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableIdle;

    /**
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'appId' => 'AppId',
        'appIds' => 'AppIds',
        'enableIdle' => 'EnableIdle',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->enableIdle) {
            $res['EnableIdle'] = $this->enableIdle;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['EnableIdle'])) {
            $model->enableIdle = $map['EnableIdle'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}

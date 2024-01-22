<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListIngressesRequest extends Model
{
    /**
     * @description The list of routing rules.
     *
     * @example bbf3a590-6d13-46fe-8ca9-c947a20b****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The returned data.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'appId'       => 'AppId',
        'namespaceId' => 'NamespaceId',
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
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIngressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}

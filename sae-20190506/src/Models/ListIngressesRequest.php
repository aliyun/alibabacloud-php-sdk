<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListIngressesRequest extends Model
{
    /**
     * @description The ID of an application.
     *
     * @example bbf3a590-6d13-46fe-8ca9-c947a20b****
     *
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of a namespace.
     *
     * This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appId' => 'AppId',
        'currentPage' => 'CurrentPage',
        'namespaceId' => 'NamespaceId',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

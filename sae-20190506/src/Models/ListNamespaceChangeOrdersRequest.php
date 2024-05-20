<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListNamespaceChangeOrdersRequest extends Model
{
    /**
     * @description 2
     *
     * @example 2
     *
     * @var string
     */
    public $coStatus;

    /**
     * @description CoBatchStartApplication
     *
     * @example CoBatchStartApplication
     *
     * @var string
     */
    public $coType;

    /**
     * @description 1
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description test
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description cn-shanghai:test
     *
     * This parameter is required.
     * @example cn-shanghai:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description 20
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'coStatus'    => 'CoStatus',
        'coType'      => 'CoType',
        'currentPage' => 'CurrentPage',
        'key'         => 'Key',
        'namespaceId' => 'NamespaceId',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coStatus) {
            $res['CoStatus'] = $this->coStatus;
        }
        if (null !== $this->coType) {
            $res['CoType'] = $this->coType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
     * @return ListNamespaceChangeOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoStatus'])) {
            $model->coStatus = $map['CoStatus'];
        }
        if (isset($map['CoType'])) {
            $model->coType = $map['CoType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
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

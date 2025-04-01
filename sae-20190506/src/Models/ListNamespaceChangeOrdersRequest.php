<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListNamespaceChangeOrdersRequest extends Model
{
    /**
     * @var string
     */
    public $coStatus;

    /**
     * @var string
     */
    public $coType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'coStatus' => 'CoStatus',
        'coType' => 'CoType',
        'currentPage' => 'CurrentPage',
        'key' => 'Key',
        'namespaceId' => 'NamespaceId',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

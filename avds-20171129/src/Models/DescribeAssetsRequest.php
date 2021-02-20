<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssetsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $search;

    /**
     * @var string
     */
    public $assetGroupId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $gmtCreateFrom;

    /**
     * @var int
     */
    public $gmtCreateTo;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $types;

    /**
     * @var string[]
     */
    public $assets;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceOwnerId' => 'ResourceOwnerId',
        'status'          => 'Status',
        'search'          => 'Search',
        'assetGroupId'    => 'AssetGroupId',
        'source'          => 'Source',
        'gmtCreateFrom'   => 'GmtCreateFrom',
        'gmtCreateTo'     => 'GmtCreateTo',
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'types'           => 'Types',
        'assets'          => 'Assets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->assetGroupId) {
            $res['AssetGroupId'] = $this->assetGroupId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->gmtCreateFrom) {
            $res['GmtCreateFrom'] = $this->gmtCreateFrom;
        }
        if (null !== $this->gmtCreateTo) {
            $res['GmtCreateTo'] = $this->gmtCreateTo;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->assets) {
            $res['Assets'] = $this->assets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['AssetGroupId'])) {
            $model->assetGroupId = $map['AssetGroupId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['GmtCreateFrom'])) {
            $model->gmtCreateFrom = $map['GmtCreateFrom'];
        }
        if (isset($map['GmtCreateTo'])) {
            $model->gmtCreateTo = $map['GmtCreateTo'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }
        if (isset($map['Assets'])) {
            if (!empty($map['Assets'])) {
                $model->assets = $map['Assets'];
            }
        }

        return $model;
    }
}

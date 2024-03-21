<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SearchSimilarityListRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $classifications;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var mixed[]
     */
    public $similarGroups;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $successSearchType;

    /**
     * @var string
     */
    public $umid;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'classifications'   => 'Classifications',
        'name'              => 'Name',
        'orderId'           => 'OrderId',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'similarGroups'     => 'SimilarGroups',
        'status'            => 'Status',
        'successSearchType' => 'SuccessSearchType',
        'umid'              => 'Umid',
        'uri'               => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classifications) {
            $res['Classifications'] = $this->classifications;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->similarGroups) {
            $res['SimilarGroups'] = $this->similarGroups;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successSearchType) {
            $res['SuccessSearchType'] = $this->successSearchType;
        }
        if (null !== $this->umid) {
            $res['Umid'] = $this->umid;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchSimilarityListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classifications'])) {
            $model->classifications = $map['Classifications'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SimilarGroups'])) {
            $model->similarGroups = $map['SimilarGroups'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessSearchType'])) {
            $model->successSearchType = $map['SuccessSearchType'];
        }
        if (isset($map['Umid'])) {
            $model->umid = $map['Umid'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}

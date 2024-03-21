<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SearchSimilarityListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $classificationsShrink;

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
     * @var string
     */
    public $similarGroupsShrink;

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
        'classificationsShrink' => 'Classifications',
        'name'                  => 'Name',
        'orderId'               => 'OrderId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'similarGroupsShrink'   => 'SimilarGroups',
        'status'                => 'Status',
        'successSearchType'     => 'SuccessSearchType',
        'umid'                  => 'Umid',
        'uri'                   => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationsShrink) {
            $res['Classifications'] = $this->classificationsShrink;
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
        if (null !== $this->similarGroupsShrink) {
            $res['SimilarGroups'] = $this->similarGroupsShrink;
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
     * @return SearchSimilarityListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classifications'])) {
            $model->classificationsShrink = $map['Classifications'];
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
            $model->similarGroupsShrink = $map['SimilarGroups'];
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

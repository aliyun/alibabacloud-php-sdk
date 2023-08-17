<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DescribeAdvicesPageRequest extends Model
{
    /**
     * @example 12345678
     *
     * @var int
     */
    public $adviceId;

    /**
     * @example -
     *
     * @var int
     */
    public $associateUid;

    /**
     * @example EcsHighCpuUtilization
     *
     * @var string
     */
    public $checkId;

    /**
     * @example 12345678
     *
     * @var string
     */
    public $excludeAdviceId;

    /**
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'adviceId'        => 'AdviceId',
        'associateUid'    => 'AssociateUid',
        'checkId'         => 'CheckId',
        'excludeAdviceId' => 'ExcludeAdviceId',
        'language'        => 'Language',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'product'         => 'Product',
        'resourceId'      => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceId) {
            $res['AdviceId'] = $this->adviceId;
        }
        if (null !== $this->associateUid) {
            $res['AssociateUid'] = $this->associateUid;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->excludeAdviceId) {
            $res['ExcludeAdviceId'] = $this->excludeAdviceId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAdvicesPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceId'])) {
            $model->adviceId = $map['AdviceId'];
        }
        if (isset($map['AssociateUid'])) {
            $model->associateUid = $map['AssociateUid'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['ExcludeAdviceId'])) {
            $model->excludeAdviceId = $map['ExcludeAdviceId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}

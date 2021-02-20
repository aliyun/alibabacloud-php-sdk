<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponseBody\policyAttachments;
use AlibabaCloud\Tea\Model;

class ListPolicyAttachmentsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var policyAttachments
     */
    public $policyAttachments;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'policyAttachments' => 'PolicyAttachments',
        'requestId'         => 'RequestId',
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->policyAttachments) {
            $res['PolicyAttachments'] = null !== $this->policyAttachments ? $this->policyAttachments->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyAttachmentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PolicyAttachments'])) {
            $model->policyAttachments = policyAttachments::fromMap($map['PolicyAttachments']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}

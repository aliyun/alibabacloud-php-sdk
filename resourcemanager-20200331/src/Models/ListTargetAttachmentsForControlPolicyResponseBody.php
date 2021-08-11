<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTargetAttachmentsForControlPolicyResponseBody\targetAttachments;
use AlibabaCloud\Tea\Model;

class ListTargetAttachmentsForControlPolicyResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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

    /**
     * @var targetAttachments
     */
    public $targetAttachments;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'requestId'         => 'RequestId',
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
        'targetAttachments' => 'TargetAttachments',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->targetAttachments) {
            $res['TargetAttachments'] = null !== $this->targetAttachments ? $this->targetAttachments->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTargetAttachmentsForControlPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['TargetAttachments'])) {
            $model->targetAttachments = targetAttachments::fromMap($map['TargetAttachments']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQuotaReviewTasksResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListQuotaReviewTasksResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example "3351A21F-705B-508C-9450-DA65A681547F"
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the tickets. For more information, see [QuotaReviewTask](https://help.aliyun.com/document_detail/173609.html).
     *
     * @example []
     *
     * @var result[]
     */
    public $result;

    /**
     * @description The total number of entries returned.
     *
     * @example 500
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'requestId',
        'result'     => 'result',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotaReviewTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}

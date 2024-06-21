<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentResponseBody\attachmentList;
use AlibabaCloud\Tea\Model;

class ListPolicyAttachmentResponseBody extends Model
{
    /**
     * @var attachmentList[]
     */
    public $attachmentList;

    /**
     * @example B4B379C2-9319-4C6B-B579-FE36831B09F4
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 28
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'attachmentList' => 'AttachmentList',
        'requestId'      => 'RequestId',
        'total'          => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentList) {
            $res['AttachmentList'] = [];
            if (null !== $this->attachmentList && \is_array($this->attachmentList)) {
                $n = 0;
                foreach ($this->attachmentList as $item) {
                    $res['AttachmentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyAttachmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentList'])) {
            if (!empty($map['AttachmentList'])) {
                $model->attachmentList = [];
                $n                     = 0;
                foreach ($map['AttachmentList'] as $item) {
                    $model->attachmentList[$n++] = null !== $item ? attachmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

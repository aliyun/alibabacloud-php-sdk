<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentResponseBody\attachmentList;

class ListPolicyAttachmentResponseBody extends Model
{
    /**
     * @var attachmentList[]
     */
    public $attachmentList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'attachmentList' => 'AttachmentList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->attachmentList)) {
            Model::validateArray($this->attachmentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentList) {
            if (\is_array($this->attachmentList)) {
                $res['AttachmentList'] = [];
                $n1 = 0;
                foreach ($this->attachmentList as $item1) {
                    $res['AttachmentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentList'])) {
            if (!empty($map['AttachmentList'])) {
                $model->attachmentList = [];
                $n1 = 0;
                foreach ($map['AttachmentList'] as $item1) {
                    $model->attachmentList[$n1] = attachmentList::fromMap($item1);
                    ++$n1;
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

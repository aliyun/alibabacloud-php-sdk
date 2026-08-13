<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListChatSessionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $sessions;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code' => 'code',
        'hasMore' => 'hasMore',
        'message' => 'message',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'sessions' => 'sessions',
        'tenantId' => 'tenantId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['sessions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessions'])) {
            if (!empty($map['sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['sessions'] as $item1) {
                    $model->sessions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}

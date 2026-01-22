<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertWebhooksResponseBody\webhooks;

class ListAlertWebhooksResponseBody extends Model
{
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
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var webhooks[]
     */
    public $webhooks;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'total' => 'total',
        'webhooks' => 'webhooks',
    ];

    public function validate()
    {
        if (\is_array($this->webhooks)) {
            Model::validateArray($this->webhooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->webhooks) {
            if (\is_array($this->webhooks)) {
                $res['webhooks'] = [];
                $n1 = 0;
                foreach ($this->webhooks as $item1) {
                    $res['webhooks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['webhooks'])) {
            if (!empty($map['webhooks'])) {
                $model->webhooks = [];
                $n1 = 0;
                foreach ($map['webhooks'] as $item1) {
                    $model->webhooks[$n1] = webhooks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

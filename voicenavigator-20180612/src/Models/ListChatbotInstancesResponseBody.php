<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListChatbotInstancesResponseBody\bots;
use AlibabaCloud\Tea\Model;

class ListChatbotInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bots[]
     */
    public $bots;
    protected $_name = [
        'requestId'  => 'RequestId',
        'pageNumber' => 'PageNumber',
        'totalCount' => 'TotalCount',
        'pageSize'   => 'PageSize',
        'bots'       => 'Bots',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->bots) {
            $res['Bots'] = [];
            if (null !== $this->bots && \is_array($this->bots)) {
                $n = 0;
                foreach ($this->bots as $item) {
                    $res['Bots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChatbotInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Bots'])) {
            if (!empty($map['Bots'])) {
                $model->bots = [];
                $n           = 0;
                foreach ($map['Bots'] as $item) {
                    $model->bots[$n++] = null !== $item ? bots::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

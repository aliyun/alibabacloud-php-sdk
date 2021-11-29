<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\SearchLogResponseBody\slsLogItemList;
use AlibabaCloud\Tea\Model;

class SearchLogResponseBody extends Model
{
    /**
     * @var bool
     */
    public $completed;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slsLogItemList
     */
    public $slsLogItemList;
    protected $_name = [
        'completed'      => 'Completed',
        'requestId'      => 'RequestId',
        'slsLogItemList' => 'SlsLogItemList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsLogItemList) {
            $res['SlsLogItemList'] = null !== $this->slsLogItemList ? $this->slsLogItemList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsLogItemList'])) {
            $model->slsLogItemList = slsLogItemList::fromMap($map['SlsLogItemList']);
        }

        return $model;
    }
}

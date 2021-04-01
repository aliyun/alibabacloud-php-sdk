<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListValueAddedResponse\valueAddedList;
use AlibabaCloud\Tea\Model;

class ListValueAddedResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var valueAddedList[]
     */
    public $valueAddedList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'valueAddedList' => 'ValueAddedList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('valueAddedList', $this->valueAddedList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->valueAddedList) {
            $res['ValueAddedList'] = [];
            if (null !== $this->valueAddedList && \is_array($this->valueAddedList)) {
                $n = 0;
                foreach ($this->valueAddedList as $item) {
                    $res['ValueAddedList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListValueAddedResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ValueAddedList'])) {
            if (!empty($map['ValueAddedList'])) {
                $model->valueAddedList = [];
                $n                     = 0;
                foreach ($map['ValueAddedList'] as $item) {
                    $model->valueAddedList[$n++] = null !== $item ? valueAddedList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class QueryProductInstanceListResponseBody extends Model
{
    /**
     * @var ProductInstance[]
     */
    public $instanceList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceList' => 'instanceList',
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceList) {
            $res['instanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['instanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProductInstanceListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceList'])) {
            if (!empty($map['instanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['instanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? ProductInstance::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

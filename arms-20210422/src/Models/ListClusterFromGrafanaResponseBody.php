<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\ListClusterFromGrafanaResponseBody\promClusterList;
use AlibabaCloud\Tea\Model;

class ListClusterFromGrafanaResponseBody extends Model
{
    /**
     * @var promClusterList[]
     */
    public $promClusterList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'promClusterList' => 'PromClusterList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promClusterList) {
            $res['PromClusterList'] = [];
            if (null !== $this->promClusterList && \is_array($this->promClusterList)) {
                $n = 0;
                foreach ($this->promClusterList as $item) {
                    $res['PromClusterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterFromGrafanaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromClusterList'])) {
            if (!empty($map['PromClusterList'])) {
                $model->promClusterList = [];
                $n                      = 0;
                foreach ($map['PromClusterList'] as $item) {
                    $model->promClusterList[$n++] = null !== $item ? promClusterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

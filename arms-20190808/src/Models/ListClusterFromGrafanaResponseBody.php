<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaResponseBody\promClusterList;
use AlibabaCloud\Tea\Model;

class ListClusterFromGrafanaResponseBody extends Model
{
    /**
     * @description The cluster information.
     *
     * @var promClusterList[]
     */
    public $promClusterList;

    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 6849D41E-EED4-5C00-89F9-6047BBD9DCB4
     *
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

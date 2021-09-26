<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListTemplatesForSqlRuleResponseBody\serverData;
use AlibabaCloud\Tea\Model;

class ListTemplatesForSqlRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serverData[]
     */
    public $serverData;
    protected $_name = [
        'requestId'  => 'RequestId',
        'serverData' => 'ServerData',
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
        if (null !== $this->serverData) {
            $res['ServerData'] = [];
            if (null !== $this->serverData && \is_array($this->serverData)) {
                $n = 0;
                foreach ($this->serverData as $item) {
                    $res['ServerData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplatesForSqlRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerData'])) {
            if (!empty($map['ServerData'])) {
                $model->serverData = [];
                $n                 = 0;
                foreach ($map['ServerData'] as $item) {
                    $model->serverData[$n++] = null !== $item ? serverData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

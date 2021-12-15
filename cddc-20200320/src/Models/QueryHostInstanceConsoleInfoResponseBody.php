<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody\hostInstanceConsoleInfos;
use AlibabaCloud\Tea\Model;

class QueryHostInstanceConsoleInfoResponseBody extends Model
{
    /**
     * @var hostInstanceConsoleInfos[]
     */
    public $hostInstanceConsoleInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostInstanceConsoleInfos' => 'HostInstanceConsoleInfos',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostInstanceConsoleInfos) {
            $res['HostInstanceConsoleInfos'] = [];
            if (null !== $this->hostInstanceConsoleInfos && \is_array($this->hostInstanceConsoleInfos)) {
                $n = 0;
                foreach ($this->hostInstanceConsoleInfos as $item) {
                    $res['HostInstanceConsoleInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return QueryHostInstanceConsoleInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostInstanceConsoleInfos'])) {
            if (!empty($map['HostInstanceConsoleInfos'])) {
                $model->hostInstanceConsoleInfos = [];
                $n                               = 0;
                foreach ($map['HostInstanceConsoleInfos'] as $item) {
                    $model->hostInstanceConsoleInfos[$n++] = null !== $item ? hostInstanceConsoleInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody\hostInstanceConsoleInfos;
use AlibabaCloud\Tea\Model;

class QueryHostInstanceConsoleInfoResponseBody extends Model
{
    /**
     * @description The queried instances.
     *
     * @var hostInstanceConsoleInfos[]
     */
    public $hostInstanceConsoleInfos;

    /**
     * @description The request ID.
     *
     * @example D6E068C3-25BC-455A-85FE-45F0B22ECB1F
     *
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

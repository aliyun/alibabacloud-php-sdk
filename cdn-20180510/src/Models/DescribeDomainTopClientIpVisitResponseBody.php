<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody\clientIpList;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopClientIpVisitResponseBody extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * The end time must be later than the start time.
     * @var clientIpList[]
     */
    public $clientIpList;

    /**
     * @description The accelerated domain name. Separate multiple accelerated domain names with commas (,).
     *
     * By default, this operation queries client IP addresses for all accelerated domain names.
     * @example 64D28B53-5902-409B-94F6-FD46680144FE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientIpList' => 'ClientIpList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIpList) {
            $res['ClientIpList'] = [];
            if (null !== $this->clientIpList && \is_array($this->clientIpList)) {
                $n = 0;
                foreach ($this->clientIpList as $item) {
                    $res['ClientIpList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainTopClientIpVisitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = [];
                $n                   = 0;
                foreach ($map['ClientIpList'] as $item) {
                    $model->clientIpList[$n++] = null !== $item ? clientIpList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

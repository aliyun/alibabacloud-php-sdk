<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody\securityEventsResponse;
use AlibabaCloud\Tea\Model;

class DescribeSimilarSecurityEventsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var securityEventsResponse[]
     */
    public $securityEventsResponse;
    protected $_name = [
        'requestId'              => 'RequestId',
        'pageInfo'               => 'PageInfo',
        'securityEventsResponse' => 'SecurityEventsResponse',
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
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->securityEventsResponse) {
            $res['SecurityEventsResponse'] = [];
            if (null !== $this->securityEventsResponse && \is_array($this->securityEventsResponse)) {
                $n = 0;
                foreach ($this->securityEventsResponse as $item) {
                    $res['SecurityEventsResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSimilarSecurityEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['SecurityEventsResponse'])) {
            if (!empty($map['SecurityEventsResponse'])) {
                $model->securityEventsResponse = [];
                $n                             = 0;
                foreach ($map['SecurityEventsResponse'] as $item) {
                    $model->securityEventsResponse[$n++] = null !== $item ? securityEventsResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

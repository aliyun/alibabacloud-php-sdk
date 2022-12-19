<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody\securityEventsResponse;
use AlibabaCloud\Tea\Model;

class DescribeSimilarSecurityEventsResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 9F4217C8-763F-51EF-84D4-5535E072B2D8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array consisting of the alert events that are triggered by the same rule or of the same alert type.
     *
     * @var securityEventsResponse[]
     */
    public $securityEventsResponse;
    protected $_name = [
        'pageInfo'               => 'PageInfo',
        'requestId'              => 'RequestId',
        'securityEventsResponse' => 'SecurityEventsResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

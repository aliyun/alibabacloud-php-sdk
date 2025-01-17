<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody\securityEventsResponse;

class DescribeSimilarSecurityEventsResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->securityEventsResponse)) {
            Model::validateArray($this->securityEventsResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventsResponse) {
            if (\is_array($this->securityEventsResponse)) {
                $res['SecurityEventsResponse'] = [];
                $n1                            = 0;
                foreach ($this->securityEventsResponse as $item1) {
                    $res['SecurityEventsResponse'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                            = 0;
                foreach ($map['SecurityEventsResponse'] as $item1) {
                    $model->securityEventsResponse[$n1++] = securityEventsResponse::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

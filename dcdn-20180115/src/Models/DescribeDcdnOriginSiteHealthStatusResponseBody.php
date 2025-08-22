<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOriginSiteHealthStatusResponseBody\originSiteStatus;

class DescribeDcdnOriginSiteHealthStatusResponseBody extends Model
{
    /**
     * @var originSiteStatus[]
     */
    public $originSiteStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'originSiteStatus' => 'OriginSiteStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->originSiteStatus)) {
            Model::validateArray($this->originSiteStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originSiteStatus) {
            if (\is_array($this->originSiteStatus)) {
                $res['OriginSiteStatus'] = [];
                $n1 = 0;
                foreach ($this->originSiteStatus as $item1) {
                    $res['OriginSiteStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OriginSiteStatus'])) {
            if (!empty($map['OriginSiteStatus'])) {
                $model->originSiteStatus = [];
                $n1 = 0;
                foreach ($map['OriginSiteStatus'] as $item1) {
                    $model->originSiteStatus[$n1] = originSiteStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

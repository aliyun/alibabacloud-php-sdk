<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDDoSStatusResponseBody\DDoSStatus;
use AlibabaCloud\Tea\Model;

class DescribeDDoSStatusResponseBody extends Model
{
    /**
     * @description Indicates whether DDoS attacks occur on specific domain names.
     *
     * @var DDoSStatus[]
     */
    public $DDoSStatus;

    /**
     * @description The ID of the request.
     *
     * @example D7861F61-5B61-46CE-A47C-***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DDoSStatus' => 'DDoSStatus',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDoSStatus) {
            $res['DDoSStatus'] = [];
            if (null !== $this->DDoSStatus && \is_array($this->DDoSStatus)) {
                $n = 0;
                foreach ($this->DDoSStatus as $item) {
                    $res['DDoSStatus'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDDoSStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDoSStatus'])) {
            if (!empty($map['DDoSStatus'])) {
                $model->DDoSStatus = [];
                $n                 = 0;
                foreach ($map['DDoSStatus'] as $item) {
                    $model->DDoSStatus[$n++] = null !== $item ? DDoSStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

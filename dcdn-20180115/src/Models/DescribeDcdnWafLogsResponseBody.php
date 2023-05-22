<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody\domainLogDetails;
use AlibabaCloud\Tea\Model;

class DescribeDcdnWafLogsResponseBody extends Model
{
    /**
     * @description Details about logs returned.
     *
     * @var domainLogDetails[]
     */
    public $domainLogDetails;

    /**
     * @description The ID of the request.
     *
     * @example 0985A362-C81E-5A56-891D-90226BEECA7C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainLogDetails' => 'DomainLogDetails',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainLogDetails) {
            $res['DomainLogDetails'] = [];
            if (null !== $this->domainLogDetails && \is_array($this->domainLogDetails)) {
                $n = 0;
                foreach ($this->domainLogDetails as $item) {
                    $res['DomainLogDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDcdnWafLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainLogDetails'])) {
            if (!empty($map['DomainLogDetails'])) {
                $model->domainLogDetails = [];
                $n                       = 0;
                foreach ($map['DomainLogDetails'] as $item) {
                    $model->domainLogDetails[$n++] = null !== $item ? domainLogDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody\domainLogDetails;

class DescribeDcdnWafLogsResponseBody extends Model
{
    /**
     * @var domainLogDetails[]
     */
    public $domainLogDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainLogDetails' => 'DomainLogDetails',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainLogDetails)) {
            Model::validateArray($this->domainLogDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainLogDetails) {
            if (\is_array($this->domainLogDetails)) {
                $res['DomainLogDetails'] = [];
                $n1 = 0;
                foreach ($this->domainLogDetails as $item1) {
                    $res['DomainLogDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainLogDetails'])) {
            if (!empty($map['DomainLogDetails'])) {
                $model->domainLogDetails = [];
                $n1 = 0;
                foreach ($map['DomainLogDetails'] as $item1) {
                    $model->domainLogDetails[$n1] = domainLogDetails::fromMap($item1);
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

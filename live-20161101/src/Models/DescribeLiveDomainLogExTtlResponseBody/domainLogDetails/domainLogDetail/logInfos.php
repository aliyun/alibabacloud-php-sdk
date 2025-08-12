<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLogExTtlResponseBody\domainLogDetails\domainLogDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLogExTtlResponseBody\domainLogDetails\domainLogDetail\logInfos\logInfoDetail;

class logInfos extends Model
{
    /**
     * @var logInfoDetail[]
     */
    public $logInfoDetail;
    protected $_name = [
        'logInfoDetail' => 'LogInfoDetail',
    ];

    public function validate()
    {
        if (\is_array($this->logInfoDetail)) {
            Model::validateArray($this->logInfoDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logInfoDetail) {
            if (\is_array($this->logInfoDetail)) {
                $res['LogInfoDetail'] = [];
                $n1 = 0;
                foreach ($this->logInfoDetail as $item1) {
                    $res['LogInfoDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['LogInfoDetail'])) {
            if (!empty($map['LogInfoDetail'])) {
                $model->logInfoDetail = [];
                $n1 = 0;
                foreach ($map['LogInfoDetail'] as $item1) {
                    $model->logInfoDetail[$n1] = logInfoDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

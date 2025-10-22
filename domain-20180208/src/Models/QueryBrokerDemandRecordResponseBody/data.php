<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandRecordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandRecordResponseBody\data\brokerDemandRecord;

class data extends Model
{
    /**
     * @var brokerDemandRecord[]
     */
    public $brokerDemandRecord;
    protected $_name = [
        'brokerDemandRecord' => 'BrokerDemandRecord',
    ];

    public function validate()
    {
        if (\is_array($this->brokerDemandRecord)) {
            Model::validateArray($this->brokerDemandRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brokerDemandRecord) {
            if (\is_array($this->brokerDemandRecord)) {
                $res['BrokerDemandRecord'] = [];
                $n1 = 0;
                foreach ($this->brokerDemandRecord as $item1) {
                    $res['BrokerDemandRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BrokerDemandRecord'])) {
            if (!empty($map['BrokerDemandRecord'])) {
                $model->brokerDemandRecord = [];
                $n1 = 0;
                foreach ($map['BrokerDemandRecord'] as $item1) {
                    $model->brokerDemandRecord[$n1] = brokerDemandRecord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

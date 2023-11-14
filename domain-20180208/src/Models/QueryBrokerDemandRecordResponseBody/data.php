<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandRecordResponseBody;

use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandRecordResponseBody\data\brokerDemandRecord;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brokerDemandRecord) {
            $res['BrokerDemandRecord'] = [];
            if (null !== $this->brokerDemandRecord && \is_array($this->brokerDemandRecord)) {
                $n = 0;
                foreach ($this->brokerDemandRecord as $item) {
                    $res['BrokerDemandRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrokerDemandRecord'])) {
            if (!empty($map['BrokerDemandRecord'])) {
                $model->brokerDemandRecord = [];
                $n                         = 0;
                foreach ($map['BrokerDemandRecord'] as $item) {
                    $model->brokerDemandRecord[$n++] = null !== $item ? brokerDemandRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

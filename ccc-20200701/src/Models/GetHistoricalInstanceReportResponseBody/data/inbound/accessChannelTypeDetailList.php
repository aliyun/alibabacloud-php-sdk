<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalInstanceReportResponseBody\data\inbound;

use AlibabaCloud\Dara\Model;

class accessChannelTypeDetailList extends Model
{
    /**
     * @var string
     */
    public $accessChannelType;

    /**
     * @var int
     */
    public $callsOffered;
    protected $_name = [
        'accessChannelType' => 'AccessChannelType',
        'callsOffered' => 'CallsOffered',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessChannelType) {
            $res['AccessChannelType'] = $this->accessChannelType;
        }

        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
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
        if (isset($map['AccessChannelType'])) {
            $model->accessChannelType = $map['AccessChannelType'];
        }

        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportResponseBody\data\list_\inbound;

use AlibabaCloud\Tea\Model;

class accessChannelTypeDetails extends Model
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
        'callsOffered'      => 'CallsOffered',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return accessChannelTypeDetails
     */
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

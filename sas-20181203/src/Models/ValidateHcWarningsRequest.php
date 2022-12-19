<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ValidateHcWarningsRequest extends Model
{
    /**
     * @description The IDs of risk items that you want to verify. Separate multiple IDs with commas (,).
     *
     * @example 43
     *
     * @var string
     */
    public $riskIds;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.3.4
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The UUIDs of servers on which you want to verify risk items.
     *
     * @example 78645c8e-2e89-441b-8eb,a9622a6b-adb5-4dd3-929e,0136460a-1cb5-44e8-****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'riskIds'  => 'RiskIds',
        'sourceIp' => 'SourceIp',
        'uuids'    => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskIds) {
            $res['RiskIds'] = $this->riskIds;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateHcWarningsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskIds'])) {
            $model->riskIds = $map['RiskIds'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}

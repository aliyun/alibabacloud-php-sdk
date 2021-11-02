<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ValidateHcWarningsRequest extends Model
{
    /**
     * @var string
     */
    public $riskIds;

    /**
     * @var string
     */
    public $sourceIp;

    /**
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

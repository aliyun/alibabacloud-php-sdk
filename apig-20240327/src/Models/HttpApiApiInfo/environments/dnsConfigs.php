<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;
use AlibabaCloud\Tea\Model;

class dnsConfigs extends Model
{
    /**
     * @var string[]
     */
    public $dnsList;

    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'dnsList' => 'dnsList',
        'match'   => 'match',
        'weight'  => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsList) {
            $res['dnsList'] = $this->dnsList;
        }
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dnsList'])) {
            if (!empty($map['dnsList'])) {
                $model->dnsList = $map['dnsList'];
            }
        }
        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}

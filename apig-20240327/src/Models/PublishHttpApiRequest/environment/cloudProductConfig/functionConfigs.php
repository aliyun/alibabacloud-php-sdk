<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\PublishHttpApiRequest\environment\cloudProductConfig;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;
use AlibabaCloud\Tea\Model;

class functionConfigs extends Model
{
    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;

    /**
     * @example fc-test
     *
     * @var string
     */
    public $name;

    /**
     * @example LATEST
     *
     * @var string
     */
    public $quanlifer;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'match'     => 'match',
        'name'      => 'name',
        'quanlifer' => 'quanlifer',
        'weight'    => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->quanlifer) {
            $res['quanlifer'] = $this->quanlifer;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['quanlifer'])) {
            $model->quanlifer = $map['quanlifer'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result;

use AlibabaCloud\Tea\Model;

class masterConfiguration extends Model
{
    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $disk;

    /**
     * @var string
     */
    public $diskType;
    protected $_name = [
        'spec'     => 'spec',
        'amount'   => 'amount',
        'disk'     => 'disk',
        'diskType' => 'diskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result;

use AlibabaCloud\Dara\Model;

class masterConfiguration extends Model
{
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

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $specInfo;
    protected $_name = [
        'amount' => 'amount',
        'disk' => 'disk',
        'diskType' => 'diskType',
        'spec' => 'spec',
        'specInfo' => 'specInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }

        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }

        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        if (null !== $this->specInfo) {
            $res['specInfo'] = $this->specInfo;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }

        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }

        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        if (isset($map['specInfo'])) {
            $model->specInfo = $map['specInfo'];
        }

        return $model;
    }
}

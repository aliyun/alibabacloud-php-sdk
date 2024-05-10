<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class kibanaConfiguration extends Model
{
    /**
     * @description The size of the node storage space. Unit: GB.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The storage type of the node. Only cloud_ssd(SSD cloud disk) is supported.
     *
     * @example 20
     *
     * @var int
     */
    public $disk;

    /**
     * @description The network configurations.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The number of nodes.
     *
     * @example elasticsearch.n4.small
     *
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $specInfo;
    protected $_name = [
        'amount'   => 'amount',
        'disk'     => 'disk',
        'diskType' => 'diskType',
        'spec'     => 'spec',
        'specInfo' => 'specInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return kibanaConfiguration
     */
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

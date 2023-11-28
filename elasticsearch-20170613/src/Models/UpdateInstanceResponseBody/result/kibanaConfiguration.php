<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class kibanaConfiguration extends Model
{
    /**
     * @description The configuration of dedicated master nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The node specifications.
     *
     * @example 20
     *
     * @var int
     */
    public $disk;

    /**
     * @description The number of nodes.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The storage type of the node. This parameter can be ignored.
     *
     * @example elasticsearch.n4.small
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'amount'   => 'amount',
        'disk'     => 'disk',
        'diskType' => 'diskType',
        'spec'     => 'spec',
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

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class clientNodeConfiguration extends Model
{
    /**
     * @description The size of the node storage space. Unit: GB.
     *
     * @example 3
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable disk encryption for the node. Valid values:
     *
     *   true: enables instant image cache.
     *   false: disables reuse of image cache layers.
     *
     * @example 20
     *
     * @var int
     */
    public $disk;

    /**
     * @description The storage type of the node. Valid values:
     *
     *   cloud_ssd: SSD.
     *   cloud_essd: ESSD.
     *   cloud_efficiency: ultra disk
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The number of nodes.
     *
     * @example elasticsearch.sn2ne.large
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
     * @return clientNodeConfiguration
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

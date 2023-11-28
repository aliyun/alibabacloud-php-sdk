<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeSpec extends Model
{
    /**
     * @description The network configurations.
     *
     * @example 50
     *
     * @var int
     */
    public $disk;

    /**
     * @description The ID of the VPC.
     *
     * @example false
     *
     * @var bool
     */
    public $diskEncryption;

    /**
     * @description The zone where the cluster resides.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The type of the disk.
     *
     * @example logstash.n4.small
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'disk'           => 'disk',
        'diskEncryption' => 'diskEncryption',
        'diskType'       => 'diskType',
        'spec'           => 'spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }
        if (null !== $this->diskEncryption) {
            $res['diskEncryption'] = $this->diskEncryption;
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
     * @return nodeSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }
        if (isset($map['diskEncryption'])) {
            $model->diskEncryption = $map['diskEncryption'];
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

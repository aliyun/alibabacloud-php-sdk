<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeSpec extends Model
{
    /**
     * @description Whether to use disk encryption:
     *
     *   true
     *   false
     *
     * @example 20
     *
     * @var int
     */
    public $disk;

    /**
     * @description The disk type of the node.
     *
     * @example true
     *
     * @var bool
     */
    public $diskEncryption;

    /**
     * @description The network configurations.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The disk size of the node.
     *
     * @example elasticsearch.sn1ne.large
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

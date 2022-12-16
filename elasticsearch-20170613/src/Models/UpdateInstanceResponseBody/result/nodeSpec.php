<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeSpec extends Model
{
    /**
     * @example 40
     *
     * @var int
     */
    public $disk;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @example elasticsearch.sn2ne.xlarge
     *
     * @var string
     */
    public $spec;
    protected $_name = [
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
     * @return nodeSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

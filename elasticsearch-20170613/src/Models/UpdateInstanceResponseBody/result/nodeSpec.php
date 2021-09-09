<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeSpec extends Model
{
    /**
     * @var string
     */
    public $spec;

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
     * @return nodeSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
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

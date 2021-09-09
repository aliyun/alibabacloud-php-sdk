<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Tea\Model;

class clientNodeDiskList extends Model
{
    /**
     * @var int
     */
    public $scaleLimit;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var string
     */
    public $diskType;
    protected $_name = [
        'scaleLimit' => 'scaleLimit',
        'minSize'    => 'minSize',
        'maxSize'    => 'maxSize',
        'diskType'   => 'diskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scaleLimit) {
            $res['scaleLimit'] = $this->scaleLimit;
        }
        if (null !== $this->minSize) {
            $res['minSize'] = $this->minSize;
        }
        if (null !== $this->maxSize) {
            $res['maxSize'] = $this->maxSize;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientNodeDiskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scaleLimit'])) {
            $model->scaleLimit = $map['scaleLimit'];
        }
        if (isset($map['minSize'])) {
            $model->minSize = $map['minSize'];
        }
        if (isset($map['maxSize'])) {
            $model->maxSize = $map['maxSize'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }

        return $model;
    }
}

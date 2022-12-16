<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Tea\Model;

class clientNodeDiskList extends Model
{
    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskType;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxSize;

    /**
     * @example 20
     *
     * @var int
     */
    public $minSize;

    /**
     * @example 18
     *
     * @var int
     */
    public $scaleLimit;
    protected $_name = [
        'diskType'   => 'diskType',
        'maxSize'    => 'maxSize',
        'minSize'    => 'minSize',
        'scaleLimit' => 'scaleLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }
        if (null !== $this->maxSize) {
            $res['maxSize'] = $this->maxSize;
        }
        if (null !== $this->minSize) {
            $res['minSize'] = $this->minSize;
        }
        if (null !== $this->scaleLimit) {
            $res['scaleLimit'] = $this->scaleLimit;
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
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }
        if (isset($map['maxSize'])) {
            $model->maxSize = $map['maxSize'];
        }
        if (isset($map['minSize'])) {
            $model->minSize = $map['minSize'];
        }
        if (isset($map['scaleLimit'])) {
            $model->scaleLimit = $map['scaleLimit'];
        }

        return $model;
    }
}

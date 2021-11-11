<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\warmNodeProperties;

use AlibabaCloud\Tea\Model;

class diskList extends Model
{
    /**
     * @var bool
     */
    public $diskEncryption;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $scaleLimit;

    /**
     * @var string[]
     */
    public $valueLimitSet;
    protected $_name = [
        'diskEncryption' => 'diskEncryption',
        'diskType'       => 'diskType',
        'maxSize'        => 'maxSize',
        'minSize'        => 'minSize',
        'scaleLimit'     => 'scaleLimit',
        'valueLimitSet'  => 'valueLimitSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskEncryption) {
            $res['diskEncryption'] = $this->diskEncryption;
        }
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
        if (null !== $this->valueLimitSet) {
            $res['valueLimitSet'] = $this->valueLimitSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['diskEncryption'])) {
            $model->diskEncryption = $map['diskEncryption'];
        }
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
        if (isset($map['valueLimitSet'])) {
            if (!empty($map['valueLimitSet'])) {
                $model->valueLimitSet = $map['valueLimitSet'];
            }
        }

        return $model;
    }
}

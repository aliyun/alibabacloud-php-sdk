<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyValueAttributes\entries;
use AlibabaCloud\Tea\Model;

class propertyValueAttributes extends Model
{
    /**
     * @var entries
     */
    public $entries;

    /**
     * @example true
     *
     * @var bool
     */
    public $hidden;

    /**
     * @example 10
     *
     * @var string
     */
    public $incrememtStep;

    /**
     * @example 10000
     *
     * @var string
     */
    public $maximum;

    /**
     * @example 10
     *
     * @var string
     */
    public $mimimum;

    /**
     * @example true
     *
     * @var bool
     */
    public $readOnly;

    /**
     * @example “”
     *
     * @var string
     */
    public $type;

    /**
     * @example MB
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'entries'       => 'Entries',
        'hidden'        => 'Hidden',
        'incrememtStep' => 'IncrememtStep',
        'maximum'       => 'Maximum',
        'mimimum'       => 'Mimimum',
        'readOnly'      => 'ReadOnly',
        'type'          => 'Type',
        'unit'          => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entries) {
            $res['Entries'] = null !== $this->entries ? $this->entries->toMap() : null;
        }
        if (null !== $this->hidden) {
            $res['Hidden'] = $this->hidden;
        }
        if (null !== $this->incrememtStep) {
            $res['IncrememtStep'] = $this->incrememtStep;
        }
        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }
        if (null !== $this->mimimum) {
            $res['Mimimum'] = $this->mimimum;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyValueAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Entries'])) {
            $model->entries = entries::fromMap($map['Entries']);
        }
        if (isset($map['Hidden'])) {
            $model->hidden = $map['Hidden'];
        }
        if (isset($map['IncrememtStep'])) {
            $model->incrememtStep = $map['IncrememtStep'];
        }
        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }
        if (isset($map['Mimimum'])) {
            $model->mimimum = $map['Mimimum'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}

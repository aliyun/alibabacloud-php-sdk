<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeEIURangeResponseBody;

use AlibabaCloud\Tea\Model;

class EIUInfo extends Model
{
    /**
     * @description The suggested value for the number of EIUs.
     *
     * @example 2
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The queried range for the number of EIUs.
     *
     * @var int[]
     */
    public $EIURange;

    /**
     * @description A reserved parameter.
     *
     * @var string[]
     */
    public $storageResourceRange;
    protected $_name = [
        'defaultValue'         => 'DefaultValue',
        'EIURange'             => 'EIURange',
        'storageResourceRange' => 'StorageResourceRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->EIURange) {
            $res['EIURange'] = $this->EIURange;
        }
        if (null !== $this->storageResourceRange) {
            $res['StorageResourceRange'] = $this->storageResourceRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EIUInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['EIURange'])) {
            if (!empty($map['EIURange'])) {
                $model->EIURange = $map['EIURange'];
            }
        }
        if (isset($map['StorageResourceRange'])) {
            if (!empty($map['StorageResourceRange'])) {
                $model->storageResourceRange = $map['StorageResourceRange'];
            }
        }

        return $model;
    }
}

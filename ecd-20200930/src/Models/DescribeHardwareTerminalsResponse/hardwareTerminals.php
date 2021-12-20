<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeHardwareTerminalsResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeHardwareTerminalsResponse\hardwareTerminals\hardwareTypeDetails;
use AlibabaCloud\Tea\Model;

class hardwareTerminals extends Model
{
    /**
     * @var string
     */
    public $hardwareType;

    /**
     * @var hardwareTypeDetails[]
     */
    public $hardwareTypeDetails;
    protected $_name = [
        'hardwareType'        => 'HardwareType',
        'hardwareTypeDetails' => 'HardwareTypeDetails',
    ];

    public function validate()
    {
        Model::validateRequired('hardwareType', $this->hardwareType, true);
        Model::validateRequired('hardwareTypeDetails', $this->hardwareTypeDetails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hardwareType) {
            $res['HardwareType'] = $this->hardwareType;
        }
        if (null !== $this->hardwareTypeDetails) {
            $res['HardwareTypeDetails'] = [];
            if (null !== $this->hardwareTypeDetails && \is_array($this->hardwareTypeDetails)) {
                $n = 0;
                foreach ($this->hardwareTypeDetails as $item) {
                    $res['HardwareTypeDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hardwareTerminals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HardwareType'])) {
            $model->hardwareType = $map['HardwareType'];
        }
        if (isset($map['HardwareTypeDetails'])) {
            if (!empty($map['HardwareTypeDetails'])) {
                $model->hardwareTypeDetails = [];
                $n                          = 0;
                foreach ($map['HardwareTypeDetails'] as $item) {
                    $model->hardwareTypeDetails[$n++] = null !== $item ? hardwareTypeDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

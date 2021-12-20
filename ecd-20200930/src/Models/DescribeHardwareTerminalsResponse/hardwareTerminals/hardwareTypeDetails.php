<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeHardwareTerminalsResponse\hardwareTerminals;

use AlibabaCloud\Tea\Model;

class hardwareTypeDetails extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $hardwareVersion;

    /**
     * @var string
     */
    public $stockState;
    protected $_name = [
        'description'     => 'Description',
        'hardwareVersion' => 'HardwareVersion',
        'stockState'      => 'StockState',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('hardwareVersion', $this->hardwareVersion, true);
        Model::validateRequired('stockState', $this->stockState, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
        }
        if (null !== $this->stockState) {
            $res['StockState'] = $this->stockState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hardwareTypeDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
        }
        if (isset($map['StockState'])) {
            $model->stockState = $map['StockState'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListBusinessAccessPointsResponseBody\businessAccessPoints;

use AlibabaCloud\Dara\Model;

class opticalModuleModels extends Model
{
    /**
     * @var string
     */
    public $opticalModuleModel;

    /**
     * @var string
     */
    public $portType;
    protected $_name = [
        'opticalModuleModel' => 'OpticalModuleModel',
        'portType' => 'PortType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opticalModuleModel) {
            $res['OpticalModuleModel'] = $this->opticalModuleModel;
        }

        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpticalModuleModel'])) {
            $model->opticalModuleModel = $map['OpticalModuleModel'];
        }

        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }

        return $model;
    }
}

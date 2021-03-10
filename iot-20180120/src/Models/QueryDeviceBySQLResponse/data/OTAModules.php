<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLResponse\data;

use AlibabaCloud\Tea\Model;

class OTAModules extends Model
{
    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $firmwareVersion;
    protected $_name = [
        'moduleName'      => 'ModuleName',
        'firmwareVersion' => 'FirmwareVersion',
    ];

    public function validate()
    {
        Model::validateRequired('moduleName', $this->moduleName, true);
        Model::validateRequired('firmwareVersion', $this->firmwareVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OTAModules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }

        return $model;
    }
}

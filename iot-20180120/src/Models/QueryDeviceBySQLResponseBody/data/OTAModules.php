<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLResponseBody\data;

use AlibabaCloud\Tea\Model;

class OTAModules extends Model
{
    /**
     * @var string
     */
    public $firmwareVersion;

    /**
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'firmwareVersion' => 'FirmwareVersion',
        'moduleName'      => 'ModuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
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
        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}

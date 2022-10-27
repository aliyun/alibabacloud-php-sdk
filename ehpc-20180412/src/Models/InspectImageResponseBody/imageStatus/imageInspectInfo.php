<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\InspectImageResponseBody\imageStatus;

use AlibabaCloud\Tea\Model;

class imageInspectInfo extends Model
{
    /**
     * @var string
     */
    public $bootStrap;

    /**
     * @var string
     */
    public $buildArch;

    /**
     * @var string
     */
    public $buildDate;

    /**
     * @var string
     */
    public $containerVersion;

    /**
     * @var string
     */
    public $defFrom;

    /**
     * @var string
     */
    public $schemaVersion;
    protected $_name = [
        'bootStrap'        => 'BootStrap',
        'buildArch'        => 'BuildArch',
        'buildDate'        => 'BuildDate',
        'containerVersion' => 'ContainerVersion',
        'defFrom'          => 'DefFrom',
        'schemaVersion'    => 'SchemaVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootStrap) {
            $res['BootStrap'] = $this->bootStrap;
        }
        if (null !== $this->buildArch) {
            $res['BuildArch'] = $this->buildArch;
        }
        if (null !== $this->buildDate) {
            $res['BuildDate'] = $this->buildDate;
        }
        if (null !== $this->containerVersion) {
            $res['ContainerVersion'] = $this->containerVersion;
        }
        if (null !== $this->defFrom) {
            $res['DefFrom'] = $this->defFrom;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInspectInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BootStrap'])) {
            $model->bootStrap = $map['BootStrap'];
        }
        if (isset($map['BuildArch'])) {
            $model->buildArch = $map['BuildArch'];
        }
        if (isset($map['BuildDate'])) {
            $model->buildDate = $map['BuildDate'];
        }
        if (isset($map['ContainerVersion'])) {
            $model->containerVersion = $map['ContainerVersion'];
        }
        if (isset($map['DefFrom'])) {
            $model->defFrom = $map['DefFrom'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }

        return $model;
    }
}

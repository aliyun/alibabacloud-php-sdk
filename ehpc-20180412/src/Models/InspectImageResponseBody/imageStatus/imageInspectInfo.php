<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\InspectImageResponseBody\imageStatus;

use AlibabaCloud\Tea\Model;

class imageInspectInfo extends Model
{
    /**
     * @description The version of the bootstrapper used by the container image.
     *
     * @example 1.0
     *
     * @var string
     */
    public $bootStrap;

    /**
     * @description The architecture used to build the image.
     *
     * @example amd64
     *
     * @var string
     */
    public $buildArch;

    /**
     * @description The date on which the image was built.
     *
     * @example Tuesday_9_November_2021_19
     *
     * @var string
     */
    public $buildDate;

    /**
     * @description The container version of the image.
     *
     * @example sccIntelMPI.sif
     *
     * @var string
     */
    public $containerVersion;

    /**
     * @description The mode in which the image was built.
     *
     * @example localimage
     *
     * @var string
     */
    public $defFrom;

    /**
     * @description The singularity version and kernel version of the image.
     *
     * @example 3.8.3-1.el7
     *
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

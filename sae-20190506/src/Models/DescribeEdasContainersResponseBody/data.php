<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeEdasContainersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the component is disabled. Valid values:
     *
     *   **true**: The component is disabled.
     *   **false**: The component is not disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The version of the container, such as Ali-Tomcat, in which an application that is developed based on High-speed Service Framework (HSF) is deployed.
     *
     * @example 3.5.3
     *
     * @var string
     */
    public $edasContainerVersion;
    protected $_name = [
        'disabled' => 'Disabled',
        'edasContainerVersion' => 'EdasContainerVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }

        return $model;
    }
}

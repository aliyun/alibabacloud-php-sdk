<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody\systemPropertyTemplateModel;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody\systemPropertyTemplateModel\systemPropertyInfo\customPropertyInfos;
use AlibabaCloud\Tea\Model;

class systemPropertyInfo extends Model
{
    /**
     * @var customPropertyInfos[]
     */
    public $customPropertyInfos;

    /**
     * @example null
     *
     * @var string
     */
    public $roProductDevice;
    protected $_name = [
        'customPropertyInfos' => 'CustomPropertyInfos',
        'roProductDevice' => 'RoProductDevice',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customPropertyInfos) {
            $res['CustomPropertyInfos'] = [];
            if (null !== $this->customPropertyInfos && \is_array($this->customPropertyInfos)) {
                $n = 0;
                foreach ($this->customPropertyInfos as $item) {
                    $res['CustomPropertyInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roProductDevice) {
            $res['RoProductDevice'] = $this->roProductDevice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemPropertyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomPropertyInfos'])) {
            if (!empty($map['CustomPropertyInfos'])) {
                $model->customPropertyInfos = [];
                $n = 0;
                foreach ($map['CustomPropertyInfos'] as $item) {
                    $model->customPropertyInfos[$n++] = null !== $item ? customPropertyInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RoProductDevice'])) {
            $model->roProductDevice = $map['RoProductDevice'];
        }

        return $model;
    }
}

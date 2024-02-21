<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyValueAttributes\entries;

use AlibabaCloud\Tea\Model;

class valueEntryInfo extends Model
{
    /**
     * @example “”
     *
     * @var string
     */
    public $description;

    /**
     * @example “”
     *
     * @var string
     */
    public $label;

    /**
     * @example “”
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'label'       => 'Label',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueEntryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody\propertyDataInfos;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody\propertyDataInfos\propertyDataInfo\list_;
use AlibabaCloud\Tea\Model;

class propertyDataInfo extends Model
{
    /**
     * @description The identifier of the property.
     *
     * @example temperature
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The list of property records.
     *
     * @var list_
     */
    public $list;
    protected $_name = [
        'identifier' => 'Identifier',
        'list'       => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        return $model;
    }
}

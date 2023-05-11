<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The features of the TSL model. The TSL data format of the default module is different from the TSL data format of a custom module.
     *
     * For more information about the data format of the ThingModelJson parameter, see [Data structure of ThingModelJson](~~150457~~).
     * @var string
     */
    public $thingModelJson;
    protected $_name = [
        'thingModelJson' => 'ThingModelJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thingModelJson) {
            $res['ThingModelJson'] = $this->thingModelJson;
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
        if (isset($map['ThingModelJson'])) {
            $model->thingModelJson = $map['ThingModelJson'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsRequest;

use AlibabaCloud\Tea\Model;

class popLocationDeleteList extends Model
{
    /**
     * @description pop location
     *
     * @var string
     */
    public $popLocation;
    protected $_name = [
        'popLocation' => 'PopLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->popLocation) {
            $res['PopLocation'] = $this->popLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return popLocationDeleteList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PopLocation'])) {
            $model->popLocation = $map['PopLocation'];
        }

        return $model;
    }
}

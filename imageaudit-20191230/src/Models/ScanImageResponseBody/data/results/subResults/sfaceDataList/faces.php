<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\sfaceDataList;

use AlibabaCloud\Tea\Model;

class faces extends Model
{
    /**
     * @example AliFace_0001234
     *
     * @var string
     */
    public $id;

    /**
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @example 91.54
     *
     * @var float
     */
    public $rate;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
        'rate' => 'Rate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        return $model;
    }
}

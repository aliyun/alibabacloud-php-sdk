<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class DataCName extends Model
{
    /**
     * @var string
     */
    public $dataCname;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'dataCname' => 'data_cname',
        'location'  => 'location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCname) {
            $res['data_cname'] = $this->dataCname;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataCName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data_cname'])) {
            $model->dataCname = $map['data_cname'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        return $model;
    }
}

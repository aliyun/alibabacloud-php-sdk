<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\instances;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var bool
     */
    public $imported;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'imported' => 'Imported',
        'id'       => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models;

use AlibabaCloud\Tea\Model;

class CreateYydDataSetRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossFileName;
    protected $_name = [
        'name'        => 'name',
        'ossFileName' => 'ossFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ossFileName) {
            $res['ossFileName'] = $this->ossFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateYydDataSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ossFileName'])) {
            $model->ossFileName = $map['ossFileName'];
        }

        return $model;
    }
}

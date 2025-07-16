<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoRequest\option;

use AlibabaCloud\Tea\Model;

class preCheckParam extends Model
{
    /**
     * @example None
     *
     * @var string
     */
    public $name;

    /**
     * @example None
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'name' => 'Name',
        'size' => 'Size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

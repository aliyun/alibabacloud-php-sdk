<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest;

use AlibabaCloud\Dara\Model;

class systemDisk extends Model
{
    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

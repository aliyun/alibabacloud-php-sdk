<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models\FtParamListRequest;

use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @var string[]
     */
    public $type;

    /**
     * @var string[]
     */
    public $size;
    protected $_name = [
        'type' => 'Type',
        'size' => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            if (!empty($map['Type'])) {
                $model->type = $map['Type'];
            }
        }
        if (isset($map['Size'])) {
            if (!empty($map['Size'])) {
                $model->size = $map['Size'];
            }
        }

        return $model;
    }
}

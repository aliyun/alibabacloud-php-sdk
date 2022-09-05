<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponseBody\stackInfo;

use AlibabaCloud\Tea\Model;

class extInfo extends Model
{
    /**
     * @var string
     */
    public $info;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'info' => 'Info',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

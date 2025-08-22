<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponseBody\stackInfo;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

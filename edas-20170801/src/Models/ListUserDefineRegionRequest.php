<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ListUserDefineRegionRequest extends Model
{
    /**
     * @var bool
     */
    public $debugEnable;
    protected $_name = [
        'debugEnable' => 'DebugEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->debugEnable) {
            $res['DebugEnable'] = $this->debugEnable;
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
        if (isset($map['DebugEnable'])) {
            $model->debugEnable = $map['DebugEnable'];
        }

        return $model;
    }
}

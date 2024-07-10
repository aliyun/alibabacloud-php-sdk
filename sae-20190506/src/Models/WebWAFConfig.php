<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebWAFConfig extends Model
{
    /**
     * @var bool
     */
    public $enableWAF;
    protected $_name = [
        'enableWAF' => 'EnableWAF',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableWAF) {
            $res['EnableWAF'] = $this->enableWAF;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebWAFConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableWAF'])) {
            $model->enableWAF = $map['EnableWAF'];
        }

        return $model;
    }
}

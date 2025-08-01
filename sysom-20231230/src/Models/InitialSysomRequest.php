<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class InitialSysomRequest extends Model
{
    /**
     * @var bool
     */
    public $checkOnly;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'checkOnly' => 'check_only',
        'source' => 'source',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkOnly) {
            $res['check_only'] = $this->checkOnly;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitialSysomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_only'])) {
            $model->checkOnly = $map['check_only'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class ReportDevConfigRequest extends Model
{
    /**
     * @var string
     */
    public $configs;
    protected $_name = [
        'configs' => 'Configs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportDevConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }

        return $model;
    }
}

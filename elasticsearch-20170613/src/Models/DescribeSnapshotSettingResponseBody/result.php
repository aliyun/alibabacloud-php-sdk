<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeSnapshotSettingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $quartzRegex;
    protected $_name = [
        'enable'      => 'Enable',
        'quartzRegex' => 'QuartzRegex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->quartzRegex) {
            $res['QuartzRegex'] = $this->quartzRegex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['QuartzRegex'])) {
            $model->quartzRegex = $map['QuartzRegex'];
        }

        return $model;
    }
}

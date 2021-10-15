<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateSnapshotSettingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $quartzRegex;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'quartzRegex' => 'quartzRegex',
        'enable'      => 'enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quartzRegex) {
            $res['quartzRegex'] = $this->quartzRegex;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
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
        if (isset($map['quartzRegex'])) {
            $model->quartzRegex = $map['quartzRegex'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        return $model;
    }
}

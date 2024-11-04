<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class AlertRuleLabelFilter extends Model
{
    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $opt;
    protected $_name = [
        'labels' => 'labels',
        'opt'    => 'opt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->opt) {
            $res['opt'] = $this->opt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleLabelFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['opt'])) {
            $model->opt = $map['opt'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponseBody\sbjRuleList\sbjRuleItem\frontendOptions;

use AlibabaCloud\Tea\Model;

class frontendOption extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'title' => 'title',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frontendOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}

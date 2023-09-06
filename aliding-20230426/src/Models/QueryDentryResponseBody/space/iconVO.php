<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space;

use AlibabaCloud\Tea\Model;

class iconVO extends Model
{
    /**
     * @example http://
     *
     * @var string
     */
    public $icon;

    /**
     * @example type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'icon' => 'Icon',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return iconVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

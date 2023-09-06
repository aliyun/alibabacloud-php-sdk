<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space\recentList\linkSourceInfo;

use AlibabaCloud\Tea\Model;

class iconUrl extends Model
{
    /**
     * @example gh
     *
     * @var string
     */
    public $line;

    /**
     * @example def
     *
     * @var string
     */
    public $small;
    protected $_name = [
        'line'  => 'Line',
        'small' => 'Small',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->small) {
            $res['Small'] = $this->small;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return iconUrl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Small'])) {
            $model->small = $map['Small'];
        }

        return $model;
    }
}

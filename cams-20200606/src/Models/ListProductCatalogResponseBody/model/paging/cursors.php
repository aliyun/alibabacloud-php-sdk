<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponseBody\model\paging;

use AlibabaCloud\Dara\Model;

class cursors extends Model
{
    /**
     * @var string
     */
    public $after;

    /**
     * @var string
     */
    public $before;
    protected $_name = [
        'after' => 'After',
        'before' => 'Before',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->after) {
            $res['After'] = $this->after;
        }

        if (null !== $this->before) {
            $res['Before'] = $this->before;
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
        if (isset($map['After'])) {
            $model->after = $map['After'];
        }

        if (isset($map['Before'])) {
            $model->before = $map['Before'];
        }

        return $model;
    }
}

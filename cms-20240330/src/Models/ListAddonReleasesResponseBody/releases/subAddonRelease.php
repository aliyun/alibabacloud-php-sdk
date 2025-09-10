<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonReleasesResponseBody\releases;

use AlibabaCloud\Dara\Model;

class subAddonRelease extends Model
{
    /**
     * @var int
     */
    public $ready;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'ready' => 'ready',
        'total' => 'total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ready) {
            $res['ready'] = $this->ready;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['ready'])) {
            $model->ready = $map['ready'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}

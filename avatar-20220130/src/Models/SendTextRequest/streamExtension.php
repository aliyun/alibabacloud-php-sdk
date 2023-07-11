<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SendTextRequest;

use AlibabaCloud\Tea\Model;

class streamExtension extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @example true
     *
     * @var bool
     */
    public $isStream;

    /**
     * @example start
     *
     * @var string
     */
    public $position;
    protected $_name = [
        'index'    => 'Index',
        'isStream' => 'IsStream',
        'position' => 'Position',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->isStream) {
            $res['IsStream'] = $this->isStream;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamExtension
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['IsStream'])) {
            $model->isStream = $map['IsStream'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}

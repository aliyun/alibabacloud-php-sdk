<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductComponentVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 85f035f0-7a56-478c-8869-xxxxxxxxxxxx
     *
     * @var string
     */
    public $relationUID;
    protected $_name = [
        'relationUID' => 'relationUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationUID) {
            $res['relationUID'] = $this->relationUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['relationUID'])) {
            $model->relationUID = $map['relationUID'];
        }

        return $model;
    }
}

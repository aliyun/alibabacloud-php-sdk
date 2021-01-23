<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagValResponseBody;

use AlibabaCloud\Tea\Model;

class tagValues extends Model
{
    /**
     * @var string[]
     */
    public $tagValue;
    protected $_name = [
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValue'])) {
            if (!empty($map['TagValue'])) {
                $model->tagValue = $map['TagValue'];
            }
        }

        return $model;
    }
}

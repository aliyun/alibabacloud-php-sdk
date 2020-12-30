<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult;

use AlibabaCloud\Tea\Model;

class location extends Model
{
    /**
     * @var string[]
     */
    public $times;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'times' => 'Times',
        'tag'   => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return location
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Times'])) {
            if (!empty($map['Times'])) {
                $model->times = $map['Times'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}

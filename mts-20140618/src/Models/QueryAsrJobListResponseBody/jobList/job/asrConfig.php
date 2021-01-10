<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListResponseBody\jobList\job;

use AlibabaCloud\Tea\Model;

class asrConfig extends Model
{
    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'scene' => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}

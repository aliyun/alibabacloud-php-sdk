<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing\timeline\trackList\track\clips\clip\clipsConfig;

use AlibabaCloud\Tea\Model;

class clipsConfigVideo extends Model
{
    /**
     * @var string
     */
    public $l;

    /**
     * @var string
     */
    public $t;
    protected $_name = [
        'l' => 'L',
        't' => 'T',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->l) {
            $res['L'] = $this->l;
        }
        if (null !== $this->t) {
            $res['T'] = $this->t;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clipsConfigVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['L'])) {
            $model->l = $map['L'];
        }
        if (isset($map['T'])) {
            $model->t = $map['T'];
        }

        return $model;
    }
}

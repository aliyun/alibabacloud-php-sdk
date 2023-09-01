<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCharacterSetResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $characterSet;

    /**
     * @example polarx
     *
     * @var string
     */
    public $engine;
    protected $_name = [
        'characterSet' => 'CharacterSet',
        'engine'       => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->characterSet) {
            $res['CharacterSet'] = $this->characterSet;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['CharacterSet'])) {
            if (!empty($map['CharacterSet'])) {
                $model->characterSet = $map['CharacterSet'];
            }
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}

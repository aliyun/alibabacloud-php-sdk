<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageStyleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $styles;
    protected $_name = [
        'styles' => 'Styles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->styles) {
            $res['Styles'] = $this->styles;
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
        if (isset($map['Styles'])) {
            if (!empty($map['Styles'])) {
                $model->styles = $map['Styles'];
            }
        }

        return $model;
    }
}

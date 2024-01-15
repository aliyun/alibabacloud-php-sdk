<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;

use AlibabaCloud\Tea\Model;

class keywords extends Model
{
    /**
     * @var string[]
     */
    public $keyword;
    protected $_name = [
        'keyword' => 'Keyword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keywords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            if (!empty($map['Keyword'])) {
                $model->keyword = $map['Keyword'];
            }
        }

        return $model;
    }
}

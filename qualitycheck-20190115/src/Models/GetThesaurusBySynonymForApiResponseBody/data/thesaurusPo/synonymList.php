<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiResponseBody\data\thesaurusPo;

use AlibabaCloud\Tea\Model;

class synonymList extends Model
{
    /**
     * @var string[]
     */
    public $synonymList;
    protected $_name = [
        'synonymList' => 'SynonymList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->synonymList) {
            $res['SynonymList'] = $this->synonymList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return synonymList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SynonymList'])) {
            if (!empty($map['SynonymList'])) {
                $model->synonymList = $map['SynonymList'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldResponseBody\data\originator;

use AlibabaCloud\Tea\Model;

class name extends Model
{
    /**
     * @var string
     */
    public $nameInChinese;

    /**
     * @example English
     *
     * @var string
     */
    public $nameInEnglish;
    protected $_name = [
        'nameInChinese' => 'NameInChinese',
        'nameInEnglish' => 'NameInEnglish',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameInChinese) {
            $res['NameInChinese'] = $this->nameInChinese;
        }
        if (null !== $this->nameInEnglish) {
            $res['NameInEnglish'] = $this->nameInEnglish;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return name
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameInChinese'])) {
            $model->nameInChinese = $map['NameInChinese'];
        }
        if (isset($map['NameInEnglish'])) {
            $model->nameInEnglish = $map['NameInEnglish'];
        }

        return $model;
    }
}

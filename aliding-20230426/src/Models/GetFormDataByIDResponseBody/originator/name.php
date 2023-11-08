<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormDataByIDResponseBody\originator;

use AlibabaCloud\Tea\Model;

class name extends Model
{
    /**
     * @example 张三
     *
     * @var string
     */
    public $nameInChinese;

    /**
     * @example ZhangSan
     *
     * @var string
     */
    public $nameInEnglish;

    /**
     * @example i18n
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'nameInChinese' => 'NameInChinese',
        'nameInEnglish' => 'NameInEnglish',
        'type'          => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data\modifyUser;

use AlibabaCloud\Tea\Model;

class userName extends Model
{
    /**
     * @var string
     */
    public $nameInChinese;

    /**
     * @example EngilishName
     *
     * @var string
     */
    public $nameInEnglish;

    /**
     * @example ZH-CN
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
     * @return userName
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

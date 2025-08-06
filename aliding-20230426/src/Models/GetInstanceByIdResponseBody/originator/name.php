<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdResponseBody\originator;

use AlibabaCloud\Dara\Model;

class name extends Model
{
    /**
     * @var string
     */
    public $nameInChinese;

    /**
     * @var string
     */
    public $nameInEnglish;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'nameInChinese' => 'NameInChinese',
        'nameInEnglish' => 'NameInEnglish',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class UpdateNacPortalSmsPhoneWhitelistRequest extends Model
{
    /**
     * @var string[]
     */
    public $phones;
    protected $_name = [
        'phones' => 'Phones',
    ];

    public function validate()
    {
        if (\is_array($this->phones)) {
            Model::validateArray($this->phones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phones) {
            if (\is_array($this->phones)) {
                $res['Phones'] = [];
                $n1 = 0;
                foreach ($this->phones as $item1) {
                    $res['Phones'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Phones'])) {
            if (!empty($map['Phones'])) {
                $model->phones = [];
                $n1 = 0;
                foreach ($map['Phones'] as $item1) {
                    $model->phones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

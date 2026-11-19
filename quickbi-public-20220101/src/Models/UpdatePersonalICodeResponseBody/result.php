<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdatePersonalICodeResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $icode;

    /**
     * @var string
     */
    public $icodeKey;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'icode' => 'Icode',
        'icodeKey' => 'IcodeKey',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->icode) {
            $res['Icode'] = $this->icode;
        }

        if (null !== $this->icodeKey) {
            $res['IcodeKey'] = $this->icodeKey;
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
        if (isset($map['Icode'])) {
            $model->icode = $map['Icode'];
        }

        if (isset($map['IcodeKey'])) {
            $model->icodeKey = $map['IcodeKey'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

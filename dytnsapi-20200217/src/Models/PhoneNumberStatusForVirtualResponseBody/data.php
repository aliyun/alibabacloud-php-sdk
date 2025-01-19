<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVirtualResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isPrivacyNumber;
    protected $_name = [
        'isPrivacyNumber' => 'IsPrivacyNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isPrivacyNumber) {
            $res['IsPrivacyNumber'] = $this->isPrivacyNumber;
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
        if (isset($map['IsPrivacyNumber'])) {
            $model->isPrivacyNumber = $map['IsPrivacyNumber'];
        }

        return $model;
    }
}

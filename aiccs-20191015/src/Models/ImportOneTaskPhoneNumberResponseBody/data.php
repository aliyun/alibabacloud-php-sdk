<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ImportOneTaskPhoneNumberResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $detailId;
    protected $_name = [
        'detailId' => 'DetailId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailId) {
            $res['DetailId'] = $this->detailId;
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
        if (isset($map['DetailId'])) {
            $model->detailId = $map['DetailId'];
        }

        return $model;
    }
}

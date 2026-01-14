<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ListWhitePortalMenuRequest extends Model
{
    /**
     * @var string
     */
    public $dataportalId;
    protected $_name = [
        'dataportalId' => 'DataportalId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataportalId) {
            $res['DataportalId'] = $this->dataportalId;
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
        if (isset($map['DataportalId'])) {
            $model->dataportalId = $map['DataportalId'];
        }

        return $model;
    }
}

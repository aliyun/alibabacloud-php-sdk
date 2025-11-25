<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateKyuubiServiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $kyuubiServiceId;
    protected $_name = [
        'kyuubiServiceId' => 'kyuubiServiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kyuubiServiceId) {
            $res['kyuubiServiceId'] = $this->kyuubiServiceId;
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
        if (isset($map['kyuubiServiceId'])) {
            $model->kyuubiServiceId = $map['kyuubiServiceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class CreateAirflowLoginTokenRequest extends Model
{
    /**
     * @var string
     */
    public $airflowId;
    protected $_name = [
        'airflowId' => 'AirflowId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airflowId) {
            $res['AirflowId'] = $this->airflowId;
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
        if (isset($map['AirflowId'])) {
            $model->airflowId = $map['AirflowId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetApplicationContentsRequest extends Model
{
    /**
     * @var string
     */
    public $processInstanceId;
    protected $_name = [
        'processInstanceId' => 'ProcessInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
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
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        return $model;
    }
}

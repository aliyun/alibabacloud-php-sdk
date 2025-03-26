<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class QueryApplicationAccessIdRequest extends Model
{
    /**
     * @var string
     */
    public $applicationAccessId;
    protected $_name = [
        'applicationAccessId' => 'applicationAccessId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationAccessId) {
            $res['applicationAccessId'] = $this->applicationAccessId;
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
        if (isset($map['applicationAccessId'])) {
            $model->applicationAccessId = $map['applicationAccessId'];
        }

        return $model;
    }
}

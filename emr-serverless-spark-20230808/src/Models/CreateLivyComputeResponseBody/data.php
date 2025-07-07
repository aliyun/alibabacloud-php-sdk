<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateLivyComputeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $livyComputeId;
    protected $_name = [
        'livyComputeId' => 'livyComputeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livyComputeId) {
            $res['livyComputeId'] = $this->livyComputeId;
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
        if (isset($map['livyComputeId'])) {
            $model->livyComputeId = $map['livyComputeId'];
        }

        return $model;
    }
}

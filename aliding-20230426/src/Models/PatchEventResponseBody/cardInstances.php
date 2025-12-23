<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventResponseBody;

use AlibabaCloud\Dara\Model;

class cardInstances extends Model
{
    /**
     * @var string
     */
    public $outTrackId;

    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'outTrackId' => 'outTrackId',
        'scenario' => 'scenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outTrackId) {
            $res['outTrackId'] = $this->outTrackId;
        }

        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
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
        if (isset($map['outTrackId'])) {
            $model->outTrackId = $map['outTrackId'];
        }

        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        return $model;
    }
}

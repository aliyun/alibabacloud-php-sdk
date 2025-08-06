<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest;

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
        'outTrackId' => 'OutTrackId',
        'scenario' => 'Scenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outTrackId) {
            $res['OutTrackId'] = $this->outTrackId;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
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
        if (isset($map['OutTrackId'])) {
            $model->outTrackId = $map['OutTrackId'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        return $model;
    }
}

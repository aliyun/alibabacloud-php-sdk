<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;

class AddMosaicsRequest extends Model
{
    /**
     * @var string
     */
    public $markPosition;

    /**
     * @var string
     */
    public $subSceneId;
    protected $_name = [
        'markPosition' => 'MarkPosition',
        'subSceneId' => 'SubSceneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->markPosition) {
            $res['MarkPosition'] = $this->markPosition;
        }

        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
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
        if (isset($map['MarkPosition'])) {
            $model->markPosition = $map['MarkPosition'];
        }

        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }

        return $model;
    }
}

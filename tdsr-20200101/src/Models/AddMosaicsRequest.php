<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

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
        'subSceneId'   => 'SubSceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AddMosaicsRequest
     */
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

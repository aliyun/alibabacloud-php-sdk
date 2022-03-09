<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class UpdateBimStandardDwInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataShrink;

    /**
     * @var string
     */
    public $keysShrink;

    /**
     * @var int
     */
    public $standardId;

    /**
     * @description 任务id
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'dataShrink' => 'Data',
        'keysShrink' => 'Keys',
        'standardId' => 'StandardId',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataShrink) {
            $res['Data'] = $this->dataShrink;
        }
        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
        }
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBimStandardDwInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->dataShrink = $map['Data'];
        }
        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

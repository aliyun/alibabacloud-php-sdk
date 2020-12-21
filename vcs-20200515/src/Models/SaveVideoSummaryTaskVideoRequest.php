<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class SaveVideoSummaryTaskVideoRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var bool
     */
    public $saveVideo;
    protected $_name = [
        'corpId'    => 'CorpId',
        'taskId'    => 'TaskId',
        'saveVideo' => 'SaveVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->saveVideo) {
            $res['SaveVideo'] = $this->saveVideo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveVideoSummaryTaskVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['SaveVideo'])) {
            $model->saveVideo = $map['SaveVideo'];
        }

        return $model;
    }
}

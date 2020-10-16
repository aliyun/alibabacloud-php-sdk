<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetVideoComposeResultRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $taskRequestId;
    protected $_name = [
        'corpId'        => 'CorpId',
        'taskRequestId' => 'TaskRequestId',
    ];

    public function validate()
    {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('taskRequestId', $this->taskRequestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->taskRequestId) {
            $res['TaskRequestId'] = $this->taskRequestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoComposeResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TaskRequestId'])) {
            $model->taskRequestId = $map['TaskRequestId'];
        }

        return $model;
    }
}

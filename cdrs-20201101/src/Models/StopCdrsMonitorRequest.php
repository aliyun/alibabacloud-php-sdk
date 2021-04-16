<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class StopCdrsMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $algorithmVendor;

    /**
     * @var string
     */
    public $corpId;
    protected $_name = [
        'taskId'          => 'TaskId',
        'algorithmVendor' => 'AlgorithmVendor',
        'corpId'          => 'CorpId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopCdrsMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        return $model;
    }
}

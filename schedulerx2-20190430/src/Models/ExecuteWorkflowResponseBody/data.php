<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ExecuteWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $wfInstanceId;
    protected $_name = [
        'wfInstanceId' => 'WfInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wfInstanceId) {
            $res['WfInstanceId'] = $this->wfInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WfInstanceId'])) {
            $model->wfInstanceId = $map['WfInstanceId'];
        }

        return $model;
    }
}

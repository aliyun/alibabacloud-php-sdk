<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetWorkflowStatusRequest extends Model
{
    /**
     * @var string
     */
    public $workflowType;

    /**
     * @var string
     */
    public $xuid;
    protected $_name = [
        'workflowType' => 'workflowType',
        'xuid'         => 'xuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workflowType) {
            $res['workflowType'] = $this->workflowType;
        }
        if (null !== $this->xuid) {
            $res['xuid'] = $this->xuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkflowStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['workflowType'])) {
            $model->workflowType = $map['workflowType'];
        }
        if (isset($map['xuid'])) {
            $model->xuid = $map['xuid'];
        }

        return $model;
    }
}

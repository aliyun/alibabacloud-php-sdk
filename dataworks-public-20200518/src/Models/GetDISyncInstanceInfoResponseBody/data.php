<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data\solutionInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description *   If the TaskType parameter is set to DI_REALTIME, the Name parameter indicates the name of the real-time synchronization node.
     *   If the TaskType parameter is set to DI_SOLITION, the value null is returned.
     *
     * @example fileId[100] is invalid
     *
     * @var string
     */
    public $message;

    /**
     * @description *   If the TaskType parameter is set to DI_REALTIME, the value null is returned.
     *   If the TaskType parameter is set to DI_SOLITION, the SolutionInfo parameter indicates the details of the data synchronization solution.
     *
     * @example streamx_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the data synchronization solution.
     *
     * @var solutionInfo
     */
    public $solutionInfo;

    /**
     * @description The cause of the failure to obtain the status of the real-time synchronization node or data synchronization solution. If the status of the real-time synchronization node or data synchronization solution is obtained, the value null is returned.
     *
     * @example RUN
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'message'      => 'Message',
        'name'         => 'Name',
        'solutionInfo' => 'SolutionInfo',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->solutionInfo) {
            $res['SolutionInfo'] = null !== $this->solutionInfo ? $this->solutionInfo->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SolutionInfo'])) {
            $model->solutionInfo = solutionInfo::fromMap($map['SolutionInfo']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

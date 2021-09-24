<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponse\data\solutionInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $message;

    /**
     * @var solutionInfo
     */
    public $solutionInfo;
    protected $_name = [
        'status'       => 'Status',
        'name'         => 'Name',
        'message'      => 'Message',
        'solutionInfo' => 'SolutionInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('solutionInfo', $this->solutionInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->solutionInfo) {
            $res['SolutionInfo'] = null !== $this->solutionInfo ? $this->solutionInfo->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SolutionInfo'])) {
            $model->solutionInfo = solutionInfo::fromMap($map['SolutionInfo']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data\solutionInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $name;
    /**
     * @var solutionInfo
     */
    public $solutionInfo;
    /**
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
        if (null !== $this->solutionInfo) {
            $this->solutionInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->solutionInfo) {
            $res['SolutionInfo'] = null !== $this->solutionInfo ? $this->solutionInfo->toArray($noStream) : $this->solutionInfo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

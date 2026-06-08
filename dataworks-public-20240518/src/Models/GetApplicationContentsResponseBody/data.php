<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetApplicationContentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetApplicationContentsResponseBody\data\contents;

class data extends Model
{
    /**
     * @var int
     */
    public $applicationTime;

    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var string
     */
    public $defSchema;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationTime' => 'ApplicationTime',
        'contents' => 'Contents',
        'defSchema' => 'DefSchema',
        'processInstanceId' => 'ProcessInstanceId',
        'reason' => 'Reason',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationTime) {
            $res['ApplicationTime'] = $this->applicationTime;
        }

        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defSchema) {
            $res['DefSchema'] = $this->defSchema;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['ApplicationTime'])) {
            $model->applicationTime = $map['ApplicationTime'];
        }

        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1] = contents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DefSchema'])) {
            $model->defSchema = $map['DefSchema'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

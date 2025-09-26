<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class RelatedWorkload extends Model
{
    /**
     * @var string
     */
    public $workloadId;

    /**
     * @var string
     */
    public $workloadName;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'workloadId' => 'workloadId',
        'workloadName' => 'workloadName',
        'workloadType' => 'workloadType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workloadId) {
            $res['workloadId'] = $this->workloadId;
        }

        if (null !== $this->workloadName) {
            $res['workloadName'] = $this->workloadName;
        }

        if (null !== $this->workloadType) {
            $res['workloadType'] = $this->workloadType;
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
        if (isset($map['workloadId'])) {
            $model->workloadId = $map['workloadId'];
        }

        if (isset($map['workloadName'])) {
            $model->workloadName = $map['workloadName'];
        }

        if (isset($map['workloadType'])) {
            $model->workloadType = $map['workloadType'];
        }

        return $model;
    }
}

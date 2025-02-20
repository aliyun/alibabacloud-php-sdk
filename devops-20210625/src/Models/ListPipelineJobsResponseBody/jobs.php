<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobsResponseBody;

use AlibabaCloud\Dara\Model;

class jobs extends Model
{
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var int
     */
    public $lastJobId;
    /**
     * @var string
     */
    public $lastJobParams;
    protected $_name = [
        'identifier'    => 'identifier',
        'jobName'       => 'jobName',
        'lastJobId'     => 'lastJobId',
        'lastJobParams' => 'lastJobParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }

        if (null !== $this->lastJobId) {
            $res['lastJobId'] = $this->lastJobId;
        }

        if (null !== $this->lastJobParams) {
            $res['lastJobParams'] = $this->lastJobParams;
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
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }

        if (isset($map['lastJobId'])) {
            $model->lastJobId = $map['lastJobId'];
        }

        if (isset($map['lastJobParams'])) {
            $model->lastJobParams = $map['lastJobParams'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListTaskResourceResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $instanceAttribute;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'instanceAttribute' => 'instanceAttribute',
        'instanceId'        => 'instanceId',
        'jobId'             => 'jobId',
        'name'              => 'name',
        'type'              => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceAttribute) {
            $res['instanceAttribute'] = $this->instanceAttribute;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceAttribute'])) {
            $model->instanceAttribute = $map['instanceAttribute'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomScenePolicyResponseBody extends Model
{
    /**
     * @example 2021-11-07T18:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $objects;

    /**
     * @example 1
     *
     * @var int
     */
    public $policyId;

    /**
     * @description Id of the request
     *
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2021-11-07T17:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example promotion
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'endTime'   => 'EndTime',
        'name'      => 'Name',
        'objects'   => 'Objects',
        'policyId'  => 'PolicyId',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'template'  => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objects) {
            $res['Objects'] = $this->objects;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomScenePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Objects'])) {
            if (!empty($map['Objects'])) {
                $model->objects = $map['Objects'];
            }
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobRequest extends Model
{
    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example c8a2b7f2-ad1a-4865-b872-d0080d9802d9
     *
     * @var string
     */
    public $jobId;

    /**
     * @var bool
     */
    public $withScript;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobId'      => 'JobId',
        'withScript' => 'WithScript',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->withScript) {
            $res['WithScript'] = $this->withScript;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['WithScript'])) {
            $model->withScript = $map['WithScript'];
        }

        return $model;
    }
}

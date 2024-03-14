<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\TagResourcesResponseBody\failedResources;

use AlibabaCloud\SDK\Tag\V20180828\Models\TagResourcesResponseBody\failedResources\failedResource\result;
use AlibabaCloud\Tea\Model;

class failedResource extends Model
{
    /**
     * @description The ARN of the resource.
     *
     * @example arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****
     *
     * @var string
     */
    public $resourceARN;

    /**
     * @description The information about the error.
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'resourceARN' => 'ResourceARN',
        'result'      => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceARN) {
            $res['ResourceARN'] = $this->resourceARN;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceARN'])) {
            $model->resourceARN = $map['ResourceARN'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}

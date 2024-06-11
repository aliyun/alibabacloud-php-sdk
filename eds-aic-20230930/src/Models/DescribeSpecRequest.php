<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpecRequest extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $specIds;

    /**
     * @example Available
     *
     * @var string
     */
    public $specStatus;

    /**
     * @example ARM
     *
     * @var string
     */
    public $specType;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'specIds'    => 'SpecIds',
        'specStatus' => 'SpecStatus',
        'specType'   => 'SpecType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->specIds) {
            $res['SpecIds'] = $this->specIds;
        }
        if (null !== $this->specStatus) {
            $res['SpecStatus'] = $this->specStatus;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SpecIds'])) {
            if (!empty($map['SpecIds'])) {
                $model->specIds = $map['SpecIds'];
            }
        }
        if (isset($map['SpecStatus'])) {
            $model->specStatus = $map['SpecStatus'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        return $model;
    }
}

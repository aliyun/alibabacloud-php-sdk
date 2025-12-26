<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeApisecExamplesRequest extends Model
{
    /**
     * @var string
     */
    public $abnormalTag;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $exampleType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $requestSensitiveTypeList;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string[]
     */
    public $responseSensitiveTypeList;
    protected $_name = [
        'abnormalTag' => 'AbnormalTag',
        'apiId' => 'ApiId',
        'clusterId' => 'ClusterId',
        'exampleType' => 'ExampleType',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'requestSensitiveTypeList' => 'RequestSensitiveTypeList',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'responseSensitiveTypeList' => 'ResponseSensitiveTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->requestSensitiveTypeList)) {
            Model::validateArray($this->requestSensitiveTypeList);
        }
        if (\is_array($this->responseSensitiveTypeList)) {
            Model::validateArray($this->responseSensitiveTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalTag) {
            $res['AbnormalTag'] = $this->abnormalTag;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->exampleType) {
            $res['ExampleType'] = $this->exampleType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestSensitiveTypeList) {
            if (\is_array($this->requestSensitiveTypeList)) {
                $res['RequestSensitiveTypeList'] = [];
                $n1 = 0;
                foreach ($this->requestSensitiveTypeList as $item1) {
                    $res['RequestSensitiveTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->responseSensitiveTypeList) {
            if (\is_array($this->responseSensitiveTypeList)) {
                $res['ResponseSensitiveTypeList'] = [];
                $n1 = 0;
                foreach ($this->responseSensitiveTypeList as $item1) {
                    $res['ResponseSensitiveTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AbnormalTag'])) {
            $model->abnormalTag = $map['AbnormalTag'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ExampleType'])) {
            $model->exampleType = $map['ExampleType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestSensitiveTypeList'])) {
            if (!empty($map['RequestSensitiveTypeList'])) {
                $model->requestSensitiveTypeList = [];
                $n1 = 0;
                foreach ($map['RequestSensitiveTypeList'] as $item1) {
                    $model->requestSensitiveTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['ResponseSensitiveTypeList'])) {
            if (!empty($map['ResponseSensitiveTypeList'])) {
                $model->responseSensitiveTypeList = [];
                $n1 = 0;
                foreach ($map['ResponseSensitiveTypeList'] as $item1) {
                    $model->responseSensitiveTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEvidenceRequestsRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string
     */
    public $httpStatus;

    /**
     * @var string
     */
    public $impactType;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $suspectedBypass;
    protected $_name = [
        'httpStatus' => 'httpStatus',
        'impactType' => 'impactType',
        'method' => 'method',
        'nodeId' => 'nodeId',
        'sourceType' => 'sourceType',
        'suspectedBypass' => 'suspectedBypass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpStatus) {
            $res['httpStatus'] = $this->httpStatus;
        }

        if (null !== $this->impactType) {
            $res['impactType'] = $this->impactType;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->suspectedBypass) {
            $res['suspectedBypass'] = $this->suspectedBypass;
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
        if (isset($map['httpStatus'])) {
            $model->httpStatus = $map['httpStatus'];
        }

        if (isset($map['impactType'])) {
            $model->impactType = $map['impactType'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['suspectedBypass'])) {
            $model->suspectedBypass = $map['suspectedBypass'];
        }

        return $model;
    }
}

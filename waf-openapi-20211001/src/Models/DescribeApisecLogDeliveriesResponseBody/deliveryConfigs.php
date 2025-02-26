<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecLogDeliveriesResponseBody;

use AlibabaCloud\Dara\Model;

class deliveryConfigs extends Model
{
    /**
     * @var string
     */
    public $assertKey;
    /**
     * @var string
     */
    public $logRegionId;
    /**
     * @var string
     */
    public $logStoreName;
    /**
     * @var string
     */
    public $projectName;
    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'assertKey'    => 'AssertKey',
        'logRegionId'  => 'LogRegionId',
        'logStoreName' => 'LogStoreName',
        'projectName'  => 'ProjectName',
        'status'       => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assertKey) {
            $res['AssertKey'] = $this->assertKey;
        }

        if (null !== $this->logRegionId) {
            $res['LogRegionId'] = $this->logRegionId;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['AssertKey'])) {
            $model->assertKey = $map['AssertKey'];
        }

        if (isset($map['LogRegionId'])) {
            $model->logRegionId = $map['LogRegionId'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

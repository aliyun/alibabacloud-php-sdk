<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecLogDeliveriesResponseBody;

use AlibabaCloud\Tea\Model;

class deliveryConfigs extends Model
{
    /**
     * @description The type of the log subscription. Valid values:
     *
     *   **risk**: risk information.
     *   **event**: attack event information.
     *   **asset**: asset information.
     *
     * @example risk
     *
     * @var string
     */
    public $assertKey;

    /**
     * @description The ID of the region where logs are stored.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $logRegionId;

    /**
     * @description The name of the Logstore in Simple Log Service.
     *
     * @example apisec-logstore***
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The name of the project in Simple Log Service.
     *
     * @example apisec-project-14316572********
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The status of API security log subscription. Valid values:
     *
     *   **true**: enabled.
     *   **false**: disabled.
     *
     * @example true
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return deliveryConfigs
     */
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

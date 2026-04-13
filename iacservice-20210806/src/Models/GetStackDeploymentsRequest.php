<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class GetStackDeploymentsRequest extends Model
{
    /**
     * @var string
     */
    public $configVersion;

    /**
     * @var string
     */
    public $deploymentName;

    /**
     * @var string
     */
    public $deploymentNo;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'configVersion' => 'configVersion',
        'deploymentName' => 'deploymentName',
        'deploymentNo' => 'deploymentNo',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configVersion) {
            $res['configVersion'] = $this->configVersion;
        }

        if (null !== $this->deploymentName) {
            $res['deploymentName'] = $this->deploymentName;
        }

        if (null !== $this->deploymentNo) {
            $res['deploymentNo'] = $this->deploymentNo;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['configVersion'])) {
            $model->configVersion = $map['configVersion'];
        }

        if (isset($map['deploymentName'])) {
            $model->deploymentName = $map['deploymentName'];
        }

        if (isset($map['deploymentNo'])) {
            $model->deploymentNo = $map['deploymentNo'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

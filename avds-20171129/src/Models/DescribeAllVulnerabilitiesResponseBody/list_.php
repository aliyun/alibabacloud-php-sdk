<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeAllVulnerabilitiesResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var int
     */
    public $lastDiscoveredAt;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $vulnerabilityTypeDes;

    /**
     * @var string
     */
    public $target;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'               => 'Status',
        'severity'             => 'Severity',
        'lastDiscoveredAt'     => 'LastDiscoveredAt',
        'hostname'             => 'Hostname',
        'name'                 => 'Name',
        'taskId'               => 'TaskId',
        'vulnerabilityTypeDes' => 'VulnerabilityTypeDes',
        'target'               => 'Target',
        'id'                   => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->lastDiscoveredAt) {
            $res['LastDiscoveredAt'] = $this->lastDiscoveredAt;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->vulnerabilityTypeDes) {
            $res['VulnerabilityTypeDes'] = $this->vulnerabilityTypeDes;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['LastDiscoveredAt'])) {
            $model->lastDiscoveredAt = $map['LastDiscoveredAt'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['VulnerabilityTypeDes'])) {
            $model->vulnerabilityTypeDes = $map['VulnerabilityTypeDes'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowNodeInstanceContainerLogRequest extends Model
{
    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $nodeInstanceId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $logName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'offset'         => 'Offset',
        'length'         => 'Length',
        'nodeInstanceId' => 'NodeInstanceId',
        'appId'          => 'AppId',
        'containerId'    => 'ContainerId',
        'logName'        => 'LogName',
        'projectId'      => 'ProjectId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->nodeInstanceId) {
            $res['NodeInstanceId'] = $this->nodeInstanceId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowNodeInstanceContainerLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['NodeInstanceId'])) {
            $model->nodeInstanceId = $map['NodeInstanceId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

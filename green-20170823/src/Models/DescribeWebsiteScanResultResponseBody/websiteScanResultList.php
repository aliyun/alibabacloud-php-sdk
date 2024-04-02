<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteScanResultResponseBody;

use AlibabaCloud\Tea\Model;

class websiteScanResultList extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $handleStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $imageRiskCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $scanTime;

    /**
     * @var int
     */
    public $sourceRiskCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $textRiskCount;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'domain'          => 'Domain',
        'handleStatus'    => 'HandleStatus',
        'id'              => 'Id',
        'imageRiskCount'  => 'ImageRiskCount',
        'instanceId'      => 'InstanceId',
        'labels'          => 'Labels',
        'scanTime'        => 'ScanTime',
        'sourceRiskCount' => 'SourceRiskCount',
        'taskId'          => 'TaskId',
        'textRiskCount'   => 'TextRiskCount',
        'url'             => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->handleStatus) {
            $res['HandleStatus'] = $this->handleStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageRiskCount) {
            $res['ImageRiskCount'] = $this->imageRiskCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->scanTime) {
            $res['ScanTime'] = $this->scanTime;
        }
        if (null !== $this->sourceRiskCount) {
            $res['SourceRiskCount'] = $this->sourceRiskCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->textRiskCount) {
            $res['TextRiskCount'] = $this->textRiskCount;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return websiteScanResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['HandleStatus'])) {
            $model->handleStatus = $map['HandleStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageRiskCount'])) {
            $model->imageRiskCount = $map['ImageRiskCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['ScanTime'])) {
            $model->scanTime = $map['ScanTime'];
        }
        if (isset($map['SourceRiskCount'])) {
            $model->sourceRiskCount = $map['SourceRiskCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TextRiskCount'])) {
            $model->textRiskCount = $map['TextRiskCount'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

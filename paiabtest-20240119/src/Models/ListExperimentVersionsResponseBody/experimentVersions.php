<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListExperimentVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class experimentVersions extends Model
{
    /**
     * @var string
     */
    public $buckets;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $crowdIds;

    /**
     * @var string
     */
    public $debugUsers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $experimentVersionId;

    /**
     * @var int
     */
    public $flow;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'buckets'             => 'Buckets',
        'config'              => 'Config',
        'crowdIds'            => 'CrowdIds',
        'debugUsers'          => 'DebugUsers',
        'description'         => 'Description',
        'experimentId'        => 'ExperimentId',
        'experimentVersionId' => 'ExperimentVersionId',
        'flow'                => 'Flow',
        'gmtCreateTime'       => 'GmtCreateTime',
        'gmtModifiedTime'     => 'GmtModifiedTime',
        'name'                => 'Name',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->crowdIds) {
            $res['CrowdIds'] = $this->crowdIds;
        }
        if (null !== $this->debugUsers) {
            $res['DebugUsers'] = $this->debugUsers;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->experimentVersionId) {
            $res['ExperimentVersionId'] = $this->experimentVersionId;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return experimentVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CrowdIds'])) {
            $model->crowdIds = $map['CrowdIds'];
        }
        if (isset($map['DebugUsers'])) {
            $model->debugUsers = $map['DebugUsers'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['ExperimentVersionId'])) {
            $model->experimentVersionId = $map['ExperimentVersionId'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

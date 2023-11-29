<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListWorkerInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2023-07-14T20:49:53
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example g_i4katzv***
     *
     * @var string
     */
    public $id;

    /**
     * @example i4wa71k****
     *
     * @var string
     */
    public $name;

    /**
     * @example np_4kb18w****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example j_migration_cloud-kafkavpc-ob
     *
     * @var string
     */
    public $projectName;

    /**
     * @example MIGRATION
     *
     * @var string
     */
    public $projectType;

    /**
     * @example null
     *
     * @var string
     */
    public $region;

    /**
     * @example oms.g2m.small
     *
     * @var string
     */
    public $spec;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'gmtCreate'   => 'GmtCreate',
        'id'          => 'Id',
        'name'        => 'Name',
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
        'projectType' => 'ProjectType',
        'region'      => 'Region',
        'spec'        => 'Spec',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

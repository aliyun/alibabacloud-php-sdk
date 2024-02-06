<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class MaxComputeExportConfigurationSink extends Model
{
    /**
     * @var string[]
     */
    public $fields;

    /**
     * @deprecated
     *
     * @var string
     */
    public $odpsAccessKeyId;

    /**
     * @deprecated
     *
     * @var string
     */
    public $odpsAccessSecret;

    /**
     * @example http://xxxxxxxx
     *
     * @var string
     */
    public $odpsEndpoint;

    /**
     * @example demo_project
     *
     * @var string
     */
    public $odpsProject;

    /**
     * @example acs:ram::xxxxxxx
     *
     * @var string
     */
    public $odpsRolearn;

    /**
     * @example demo_table
     *
     * @var string
     */
    public $odpsTable;

    /**
     * @var string
     */
    public $odpsTunnelEndpoint;

    /**
     * @var string[]
     */
    public $partitionColumn;

    /**
     * @example %Y_%m_%d
     *
     * @var string
     */
    public $partitionTimeFormat;

    /**
     * @example +0800
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'fields'              => 'fields',
        'odpsAccessKeyId'     => 'odpsAccessKeyId',
        'odpsAccessSecret'    => 'odpsAccessSecret',
        'odpsEndpoint'        => 'odpsEndpoint',
        'odpsProject'         => 'odpsProject',
        'odpsRolearn'         => 'odpsRolearn',
        'odpsTable'           => 'odpsTable',
        'odpsTunnelEndpoint'  => 'odpsTunnelEndpoint',
        'partitionColumn'     => 'partitionColumn',
        'partitionTimeFormat' => 'partitionTimeFormat',
        'timeZone'            => 'timeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }
        if (null !== $this->odpsAccessKeyId) {
            $res['odpsAccessKeyId'] = $this->odpsAccessKeyId;
        }
        if (null !== $this->odpsAccessSecret) {
            $res['odpsAccessSecret'] = $this->odpsAccessSecret;
        }
        if (null !== $this->odpsEndpoint) {
            $res['odpsEndpoint'] = $this->odpsEndpoint;
        }
        if (null !== $this->odpsProject) {
            $res['odpsProject'] = $this->odpsProject;
        }
        if (null !== $this->odpsRolearn) {
            $res['odpsRolearn'] = $this->odpsRolearn;
        }
        if (null !== $this->odpsTable) {
            $res['odpsTable'] = $this->odpsTable;
        }
        if (null !== $this->odpsTunnelEndpoint) {
            $res['odpsTunnelEndpoint'] = $this->odpsTunnelEndpoint;
        }
        if (null !== $this->partitionColumn) {
            $res['partitionColumn'] = $this->partitionColumn;
        }
        if (null !== $this->partitionTimeFormat) {
            $res['partitionTimeFormat'] = $this->partitionTimeFormat;
        }
        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MaxComputeExportConfigurationSink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = $map['fields'];
            }
        }
        if (isset($map['odpsAccessKeyId'])) {
            $model->odpsAccessKeyId = $map['odpsAccessKeyId'];
        }
        if (isset($map['odpsAccessSecret'])) {
            $model->odpsAccessSecret = $map['odpsAccessSecret'];
        }
        if (isset($map['odpsEndpoint'])) {
            $model->odpsEndpoint = $map['odpsEndpoint'];
        }
        if (isset($map['odpsProject'])) {
            $model->odpsProject = $map['odpsProject'];
        }
        if (isset($map['odpsRolearn'])) {
            $model->odpsRolearn = $map['odpsRolearn'];
        }
        if (isset($map['odpsTable'])) {
            $model->odpsTable = $map['odpsTable'];
        }
        if (isset($map['odpsTunnelEndpoint'])) {
            $model->odpsTunnelEndpoint = $map['odpsTunnelEndpoint'];
        }
        if (isset($map['partitionColumn'])) {
            if (!empty($map['partitionColumn'])) {
                $model->partitionColumn = $map['partitionColumn'];
            }
        }
        if (isset($map['partitionTimeFormat'])) {
            $model->partitionTimeFormat = $map['partitionTimeFormat'];
        }
        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}

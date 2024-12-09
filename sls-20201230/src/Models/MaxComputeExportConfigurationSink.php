<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class MaxComputeExportConfigurationSink extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $fields;

    /**
     * @example asdfghjk
     *
     * @deprecated
     *
     * @var string
     */
    public $odpsAccessKeyId;

    /**
     * @example esasdfghjkl
     *
     * @deprecated
     *
     * @var string
     */
    public $odpsAccessSecret;

    /**
     * @description This parameter is required.
     *
     * @example http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api
     *
     * @var string
     */
    public $odpsEndpoint;

    /**
     * @description This parameter is required.
     *
     * @example demo_project
     *
     * @var string
     */
    public $odpsProject;

    /**
     * @description This parameter is required.
     *
     * @example acs:ram::123456789:role/aliyunlogdefaultrole
     *
     * @var string
     */
    public $odpsRolearn;

    /**
     * @description This parameter is required.
     *
     * @example demo_table
     *
     * @var string
     */
    public $odpsTable;

    /**
     * @description This parameter is required.
     *
     * @example http://dt.cn-hangzhou.maxcompute.aliyun-inc.com
     *
     * @var string
     */
    public $odpsTunnelEndpoint;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $partitionColumn;

    /**
     * @description This parameter is required.
     *
     * @example %Y_%m_%d
     *
     * @var string
     */
    public $partitionTimeFormat;

    /**
     * @description This parameter is required.
     *
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

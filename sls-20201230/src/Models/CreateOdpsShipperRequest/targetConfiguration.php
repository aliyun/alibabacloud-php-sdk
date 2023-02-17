<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateOdpsShipperRequest;

use AlibabaCloud\Tea\Model;

class targetConfiguration extends Model
{
    /**
     * @example 1800
     *
     * @var int
     */
    public $bufferInterval;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $fields;

    /**
     * @example http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api
     *
     * @var string
     */
    public $odpsEndpoint;

    /**
     * @example ali-odps-project
     *
     * @var string
     */
    public $odpsProject;

    /**
     * @example test-table
     *
     * @var string
     */
    public $odpsTable;

    /**
     * @var string[]
     */
    public $partitionColumn;

    /**
     * @example yyyy_MM_dd_hh_mm
     *
     * @var string
     */
    public $partitionTimeFormat;
    protected $_name = [
        'bufferInterval'      => 'bufferInterval',
        'enable'              => 'enable',
        'fields'              => 'fields',
        'odpsEndpoint'        => 'odpsEndpoint',
        'odpsProject'         => 'odpsProject',
        'odpsTable'           => 'odpsTable',
        'partitionColumn'     => 'partitionColumn',
        'partitionTimeFormat' => 'partitionTimeFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bufferInterval) {
            $res['bufferInterval'] = $this->bufferInterval;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }
        if (null !== $this->odpsEndpoint) {
            $res['odpsEndpoint'] = $this->odpsEndpoint;
        }
        if (null !== $this->odpsProject) {
            $res['odpsProject'] = $this->odpsProject;
        }
        if (null !== $this->odpsTable) {
            $res['odpsTable'] = $this->odpsTable;
        }
        if (null !== $this->partitionColumn) {
            $res['partitionColumn'] = $this->partitionColumn;
        }
        if (null !== $this->partitionTimeFormat) {
            $res['partitionTimeFormat'] = $this->partitionTimeFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bufferInterval'])) {
            $model->bufferInterval = $map['bufferInterval'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = $map['fields'];
            }
        }
        if (isset($map['odpsEndpoint'])) {
            $model->odpsEndpoint = $map['odpsEndpoint'];
        }
        if (isset($map['odpsProject'])) {
            $model->odpsProject = $map['odpsProject'];
        }
        if (isset($map['odpsTable'])) {
            $model->odpsTable = $map['odpsTable'];
        }
        if (isset($map['partitionColumn'])) {
            if (!empty($map['partitionColumn'])) {
                $model->partitionColumn = $map['partitionColumn'];
            }
        }
        if (isset($map['partitionTimeFormat'])) {
            $model->partitionTimeFormat = $map['partitionTimeFormat'];
        }

        return $model;
    }
}

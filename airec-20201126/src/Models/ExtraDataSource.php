<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\ExtraDataSource\meta;
use AlibabaCloud\Tea\Model;

class ExtraDataSource extends Model
{
    /**
     * @example E01D574F-ABD0-4C55-A5E3-8D24FD8D42EA
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example 2021-12-07T13:26:29.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-12-07T13:26:29.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @example Ready 待应用；Online 已应用；Failed失败
     *
     * @var string
     */
    public $status;

    /**
     * @example UserCustomDataSource、ItemCustomDataSource、BehaviorCustomDataSource、SampleCustomDataSource
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'meta'         => 'Meta',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtraDataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

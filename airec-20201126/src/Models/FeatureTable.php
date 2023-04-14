<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\FeatureTable\meta;
use AlibabaCloud\Tea\Model;

class FeatureTable extends Model
{
    /**
     * @example 30E70118-FC7C-4438-9287-583CE47266A9
     *
     * @var string
     */
    public $featureTableId;

    /**
     * @example 2021-12-10T02:59:54.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-12-10T02:59:54.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $status;

    /**
     * @example ItemFeatureTable 物品特征表 UserFeatureTable 用户特征表
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'featureTableId' => 'FeatureTableId',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'meta'           => 'Meta',
        'status'         => 'Status',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureTableId) {
            $res['FeatureTableId'] = $this->featureTableId;
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
     * @return FeatureTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureTableId'])) {
            $model->featureTableId = $map['FeatureTableId'];
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

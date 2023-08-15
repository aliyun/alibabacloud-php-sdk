<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigHistoriesResponseBody\configureHistoryList;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @example hbase#hbase-site.xml#hbase.client.keyvalue.maxsize
     *
     * @var string
     */
    public $configureName;

    /**
     * @example 1608708923000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example false
     *
     * @var string
     */
    public $effective;

    /**
     * @example 10485770
     *
     * @var string
     */
    public $newValue;

    /**
     * @example 10485760
     *
     * @var string
     */
    public $oldValue;
    protected $_name = [
        'configureName' => 'ConfigureName',
        'createTime'    => 'CreateTime',
        'effective'     => 'Effective',
        'newValue'      => 'NewValue',
        'oldValue'      => 'OldValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configureName) {
            $res['ConfigureName'] = $this->configureName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigureName'])) {
            $model->configureName = $map['ConfigureName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }

        return $model;
    }
}

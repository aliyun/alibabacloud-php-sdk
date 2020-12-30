<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigHistoriesResponseBody\configureHistoryList;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $effective;

    /**
     * @var string
     */
    public $oldValue;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $configureName;

    /**
     * @var string
     */
    public $newValue;
    protected $_name = [
        'effective'     => 'Effective',
        'oldValue'      => 'OldValue',
        'createTime'    => 'CreateTime',
        'configureName' => 'ConfigureName',
        'newValue'      => 'NewValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->configureName) {
            $res['ConfigureName'] = $this->configureName;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
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
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ConfigureName'])) {
            $model->configureName = $map['ConfigureName'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }

        return $model;
    }
}

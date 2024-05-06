<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigHistoryResponseBody\configHistoryList;

use AlibabaCloud\Tea\Model;

class configHistory extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $effective;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newValue;

    /**
     * @var string
     */
    public $oldValue;
    protected $_name = [
        'createTime' => 'CreateTime',
        'effective'  => 'Effective',
        'name'       => 'Name',
        'newValue'   => 'NewValue',
        'oldValue'   => 'OldValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return configHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

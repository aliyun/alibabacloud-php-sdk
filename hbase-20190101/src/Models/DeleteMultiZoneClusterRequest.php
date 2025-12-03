<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DeleteMultiZoneClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $immediateDeleteFlag;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'immediateDeleteFlag' => 'ImmediateDeleteFlag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->immediateDeleteFlag) {
            $res['ImmediateDeleteFlag'] = $this->immediateDeleteFlag;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ImmediateDeleteFlag'])) {
            $model->immediateDeleteFlag = $map['ImmediateDeleteFlag'];
        }

        return $model;
    }
}

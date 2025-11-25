<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\ListClusterTypeResponseBody;

use AlibabaCloud\Dara\Model;

class clusterTypeDetailList extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var bool
     */
    public $isMultiAZ;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'isMultiAZ' => 'IsMultiAZ',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->isMultiAZ) {
            $res['IsMultiAZ'] = $this->isMultiAZ;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['IsMultiAZ'])) {
            $model->isMultiAZ = $map['IsMultiAZ'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $showName;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'code'        => 'Code',
        'showName'    => 'ShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}

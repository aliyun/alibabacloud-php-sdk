<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\Tea\Model;

class GetClusterWarningRequest extends Model
{
    /**
     * @var string
     */
    public $clusterID;
    protected $_name = [
        'clusterID' => 'clusterID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterID) {
            $res['clusterID'] = $this->clusterID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterWarningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterID'])) {
            $model->clusterID = $map['clusterID'];
        }

        return $model;
    }
}

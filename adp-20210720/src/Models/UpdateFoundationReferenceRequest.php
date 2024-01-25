<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class UpdateFoundationReferenceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterConfig;
    protected $_name = [
        'clusterConfig' => 'clusterConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterConfig) {
            $res['clusterConfig'] = $this->clusterConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFoundationReferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterConfig'])) {
            $model->clusterConfig = $map['clusterConfig'];
        }

        return $model;
    }
}

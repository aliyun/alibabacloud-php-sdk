<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances\service;

use AlibabaCloud\Tea\Model;

class commodity extends Model
{
    /**
     * @var string
     */
    public $saasBoostMetadata;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'saasBoostMetadata' => 'SaasBoostMetadata',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saasBoostMetadata) {
            $res['SaasBoostMetadata'] = $this->saasBoostMetadata;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaasBoostMetadata'])) {
            $model->saasBoostMetadata = $map['SaasBoostMetadata'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

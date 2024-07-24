<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class DataBoxPrivileges extends Model
{
    /**
     * @var string
     */
    public $featureAttrId;

    /**
     * @var string
     */
    public $featureId;

    /**
     * @var int
     */
    public $quota;
    protected $_name = [
        'featureAttrId' => 'feature_attr_id',
        'featureId'     => 'feature_id',
        'quota'         => 'quota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureAttrId) {
            $res['feature_attr_id'] = $this->featureAttrId;
        }
        if (null !== $this->featureId) {
            $res['feature_id'] = $this->featureId;
        }
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataBoxPrivileges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['feature_attr_id'])) {
            $model->featureAttrId = $map['feature_attr_id'];
        }
        if (isset($map['feature_id'])) {
            $model->featureId = $map['feature_id'];
        }
        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureRequest;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @example sex
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description This parameter is required.
     *
     * @example 5
     *
     * @var string
     */
    public $featureViewId;

    /**
     * @description This parameter is required.
     *
     * @example gender
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example STRING
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'     => 'AliasName',
        'featureViewId' => 'FeatureViewId',
        'name'          => 'Name',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->featureViewId) {
            $res['FeatureViewId'] = $this->featureViewId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return features
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['FeatureViewId'])) {
            $model->featureViewId = $map['FeatureViewId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

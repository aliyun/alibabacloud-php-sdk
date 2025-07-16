<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeaturesResponseBody;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @example age1,age2
     *
     * @var string
     */
    public $aliasNames;

    /**
     * @example 1
     *
     * @var string
     */
    public $featureViewId;

    /**
     * @example fv1
     *
     * @var string
     */
    public $featureViewName;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $modelFeatureCount;

    /**
     * @example f1
     *
     * @var string
     */
    public $name;

    /**
     * @example 123456
     *
     * @var string
     */
    public $owner;

    /**
     * @example STRING
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasNames' => 'AliasNames',
        'featureViewId' => 'FeatureViewId',
        'featureViewName' => 'FeatureViewName',
        'gmtCreateTime' => 'GmtCreateTime',
        'modelFeatureCount' => 'ModelFeatureCount',
        'name' => 'Name',
        'owner' => 'Owner',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasNames) {
            $res['AliasNames'] = $this->aliasNames;
        }
        if (null !== $this->featureViewId) {
            $res['FeatureViewId'] = $this->featureViewId;
        }
        if (null !== $this->featureViewName) {
            $res['FeatureViewName'] = $this->featureViewName;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->modelFeatureCount) {
            $res['ModelFeatureCount'] = $this->modelFeatureCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (isset($map['AliasNames'])) {
            $model->aliasNames = $map['AliasNames'];
        }
        if (isset($map['FeatureViewId'])) {
            $model->featureViewId = $map['FeatureViewId'];
        }
        if (isset($map['FeatureViewName'])) {
            $model->featureViewName = $map['FeatureViewName'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['ModelFeatureCount'])) {
            $model->modelFeatureCount = $map['ModelFeatureCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

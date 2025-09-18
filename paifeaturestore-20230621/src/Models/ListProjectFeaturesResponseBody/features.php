<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeaturesResponseBody;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $aliasNames;

    /**
     * @var string
     */
    public $featureViewId;

    /**
     * @var string
     */
    public $featureViewName;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var int
     */
    public $modelFeatureCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

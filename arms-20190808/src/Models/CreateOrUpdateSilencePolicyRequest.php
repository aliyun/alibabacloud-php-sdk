<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateSilencePolicyRequest extends Model
{
    /**
     * @description The ID of the silence policy.
     *
     *   If you do not configure this parameter, a new silence policy is created.
     *   If you configure this parameter, the specified silence policy is modified.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The matching rules. The following code shows the format of matching rules:
     *
     * ]
     * @example [ 	 { 	 "matchingConditions": [ 	 { 	 "value": "test", 	 "key": "altertname", 	 "operator": "eq" 	 } 	 ]      } 	 ]
     *
     * @var string
     */
    public $matchingRules;

    /**
     * @description The name of the silence policy.
     *
     * @example silencepolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'id'            => 'Id',
        'matchingRules' => 'MatchingRules',
        'name'          => 'Name',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = $this->matchingRules;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSilencePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchingRules'])) {
            $model->matchingRules = $map['MatchingRules'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

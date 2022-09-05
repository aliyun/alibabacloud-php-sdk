<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateSilencePolicyRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $matchingRules;

    /**
     * @var string
     */
    public $name;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetTrailStatusRequest extends Model
{
    /**
     * @var bool
     */
    public $isOrganizationTrail;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'isOrganizationTrail' => 'IsOrganizationTrail',
        'name'                => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isOrganizationTrail) {
            $res['IsOrganizationTrail'] = $this->isOrganizationTrail;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrailStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsOrganizationTrail'])) {
            $model->isOrganizationTrail = $map['IsOrganizationTrail'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

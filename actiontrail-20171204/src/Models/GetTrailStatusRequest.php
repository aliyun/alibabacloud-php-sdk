<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20171204\Models;

use AlibabaCloud\Tea\Model;

class GetTrailStatusRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $isOrganizationTrail;
    protected $_name = [
        'name'                => 'Name',
        'isOrganizationTrail' => 'IsOrganizationTrail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->isOrganizationTrail) {
            $res['IsOrganizationTrail'] = $this->isOrganizationTrail;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IsOrganizationTrail'])) {
            $model->isOrganizationTrail = $map['IsOrganizationTrail'];
        }

        return $model;
    }
}

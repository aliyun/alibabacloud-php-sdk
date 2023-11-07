<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetTrailStatusRequest extends Model
{
    /**
     * @description Specifies whether to query the status of a multi-account trail. Valid values:
     *
     *   true: Query the status of a multi-account trail.
     *   false: Query the status of a single-account trail. It is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $isOrganizationTrail;

    /**
     * @description The name of the trail.
     *
     * > The name must be unique within your Alibaba Cloud account.
     * @example trail-test
     *
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

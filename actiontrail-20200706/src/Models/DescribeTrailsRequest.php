<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrailsRequest extends Model
{
    /**
     * @var bool
     */
    public $includeOrganizationTrail;

    /**
     * @var bool
     */
    public $includeShadowTrails;

    /**
     * @var string
     */
    public $nameList;
    protected $_name = [
        'includeOrganizationTrail' => 'IncludeOrganizationTrail',
        'includeShadowTrails'      => 'IncludeShadowTrails',
        'nameList'                 => 'NameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeOrganizationTrail) {
            $res['IncludeOrganizationTrail'] = $this->includeOrganizationTrail;
        }
        if (null !== $this->includeShadowTrails) {
            $res['IncludeShadowTrails'] = $this->includeShadowTrails;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = $this->nameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeOrganizationTrail'])) {
            $model->includeOrganizationTrail = $map['IncludeOrganizationTrail'];
        }
        if (isset($map['IncludeShadowTrails'])) {
            $model->includeShadowTrails = $map['IncludeShadowTrails'];
        }
        if (isset($map['NameList'])) {
            $model->nameList = $map['NameList'];
        }

        return $model;
    }
}

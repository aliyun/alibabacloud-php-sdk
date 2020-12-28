<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20171204\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrailsRequest extends Model
{
    /**
     * @var bool
     */
    public $includeShadowTrails;

    /**
     * @var string
     */
    public $nameList;

    /**
     * @var bool
     */
    public $includeOrganizationTrail;
    protected $_name = [
        'includeShadowTrails'      => 'IncludeShadowTrails',
        'nameList'                 => 'NameList',
        'includeOrganizationTrail' => 'IncludeOrganizationTrail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeShadowTrails) {
            $res['IncludeShadowTrails'] = $this->includeShadowTrails;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = $this->nameList;
        }
        if (null !== $this->includeOrganizationTrail) {
            $res['IncludeOrganizationTrail'] = $this->includeOrganizationTrail;
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
        if (isset($map['IncludeShadowTrails'])) {
            $model->includeShadowTrails = $map['IncludeShadowTrails'];
        }
        if (isset($map['NameList'])) {
            $model->nameList = $map['NameList'];
        }
        if (isset($map['IncludeOrganizationTrail'])) {
            $model->includeOrganizationTrail = $map['IncludeOrganizationTrail'];
        }

        return $model;
    }
}

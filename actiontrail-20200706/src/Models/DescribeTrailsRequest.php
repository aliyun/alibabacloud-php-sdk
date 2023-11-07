<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrailsRequest extends Model
{
    /**
     * @description Specifies whether to query the information about multi-account trails. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $includeOrganizationTrail;

    /**
     * @description Specifies whether to return the information about shadow trails. Valid values:
     *
     *   false: Do not return the information about shadow trails. It is the default value.
     *   true: Return the information about shadow trails.
     *
     * @example false
     *
     * @var bool
     */
    public $includeShadowTrails;

    /**
     * @description The names of the trails whose information you want to query. Separate multiple trail names with commas (,).
     *
     * @example abc,def
     *
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

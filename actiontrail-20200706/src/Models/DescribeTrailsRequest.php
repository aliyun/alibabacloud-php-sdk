<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

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
        'includeShadowTrails' => 'IncludeShadowTrails',
        'nameList' => 'NameList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

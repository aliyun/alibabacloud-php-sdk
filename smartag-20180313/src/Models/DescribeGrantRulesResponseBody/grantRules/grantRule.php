<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantRulesResponseBody\grantRules;

use AlibabaCloud\Tea\Model;

class grantRule extends Model
{
    /**
     * @var string
     */
    public $cenInstanceId;

    /**
     * @var int
     */
    public $cenUid;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $grantRuleId;

    /**
     * @var bool
     */
    public $grantTrafficService;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $ccnUid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ccnInstanceId;
    protected $_name = [
        'cenInstanceId'       => 'CenInstanceId',
        'cenUid'              => 'CenUid',
        'gmtCreate'           => 'GmtCreate',
        'grantRuleId'         => 'GrantRuleId',
        'grantTrafficService' => 'GrantTrafficService',
        'gmtModified'         => 'GmtModified',
        'ccnUid'              => 'CcnUid',
        'regionId'            => 'RegionId',
        'ccnInstanceId'       => 'CcnInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenInstanceId) {
            $res['CenInstanceId'] = $this->cenInstanceId;
        }
        if (null !== $this->cenUid) {
            $res['CenUid'] = $this->cenUid;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->grantRuleId) {
            $res['GrantRuleId'] = $this->grantRuleId;
        }
        if (null !== $this->grantTrafficService) {
            $res['GrantTrafficService'] = $this->grantTrafficService;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ccnUid) {
            $res['CcnUid'] = $this->ccnUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ccnInstanceId) {
            $res['CcnInstanceId'] = $this->ccnInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenInstanceId'])) {
            $model->cenInstanceId = $map['CenInstanceId'];
        }
        if (isset($map['CenUid'])) {
            $model->cenUid = $map['CenUid'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GrantRuleId'])) {
            $model->grantRuleId = $map['GrantRuleId'];
        }
        if (isset($map['GrantTrafficService'])) {
            $model->grantTrafficService = $map['GrantTrafficService'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['CcnUid'])) {
            $model->ccnUid = $map['CcnUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CcnInstanceId'])) {
            $model->ccnInstanceId = $map['CcnInstanceId'];
        }

        return $model;
    }
}

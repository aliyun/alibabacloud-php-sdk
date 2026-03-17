<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantRulesResponseBody\grantRules;

use AlibabaCloud\Dara\Model;

class grantRule extends Model
{
    /**
     * @var string
     */
    public $ccnInstanceId;

    /**
     * @var int
     */
    public $ccnUid;

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
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $grantRuleId;

    /**
     * @var bool
     */
    public $grantTrafficService;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ccnInstanceId' => 'CcnInstanceId',
        'ccnUid' => 'CcnUid',
        'cenInstanceId' => 'CenInstanceId',
        'cenUid' => 'CenUid',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'grantRuleId' => 'GrantRuleId',
        'grantTrafficService' => 'GrantTrafficService',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccnInstanceId) {
            $res['CcnInstanceId'] = $this->ccnInstanceId;
        }

        if (null !== $this->ccnUid) {
            $res['CcnUid'] = $this->ccnUid;
        }

        if (null !== $this->cenInstanceId) {
            $res['CenInstanceId'] = $this->cenInstanceId;
        }

        if (null !== $this->cenUid) {
            $res['CenUid'] = $this->cenUid;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->grantRuleId) {
            $res['GrantRuleId'] = $this->grantRuleId;
        }

        if (null !== $this->grantTrafficService) {
            $res['GrantTrafficService'] = $this->grantTrafficService;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CcnInstanceId'])) {
            $model->ccnInstanceId = $map['CcnInstanceId'];
        }

        if (isset($map['CcnUid'])) {
            $model->ccnUid = $map['CcnUid'];
        }

        if (isset($map['CenInstanceId'])) {
            $model->cenInstanceId = $map['CenInstanceId'];
        }

        if (isset($map['CenUid'])) {
            $model->cenUid = $map['CenUid'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GrantRuleId'])) {
            $model->grantRuleId = $map['GrantRuleId'];
        }

        if (isset($map['GrantTrafficService'])) {
            $model->grantTrafficService = $map['GrantTrafficService'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRealTimeAgentResponseBody\data;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListRealTimeAgentResponseBody\data\user\skillLevels;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $stateDesc;

    /**
     * @var skillLevels
     */
    public $skillLevels;

    /**
     * @var string
     */
    public $dn;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $ramId;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'displayName' => 'DisplayName',
        'stateDesc'   => 'StateDesc',
        'skillLevels' => 'SkillLevels',
        'dn'          => 'Dn',
        'state'       => 'State',
        'ramId'       => 'RamId',
        'phone'       => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->stateDesc) {
            $res['StateDesc'] = $this->stateDesc;
        }
        if (null !== $this->skillLevels) {
            $res['SkillLevels'] = null !== $this->skillLevels ? $this->skillLevels->toMap() : null;
        }
        if (null !== $this->dn) {
            $res['Dn'] = $this->dn;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['StateDesc'])) {
            $model->stateDesc = $map['StateDesc'];
        }
        if (isset($map['SkillLevels'])) {
            $model->skillLevels = skillLevels::fromMap($map['SkillLevels']);
        }
        if (isset($map['Dn'])) {
            $model->dn = $map['Dn'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}

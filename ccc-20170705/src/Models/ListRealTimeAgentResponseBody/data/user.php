<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRealTimeAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRealTimeAgentResponseBody\data\user\skillLevels;

class user extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $dn;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $ramId;

    /**
     * @var skillLevels
     */
    public $skillLevels;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $stateDesc;
    protected $_name = [
        'displayName' => 'DisplayName',
        'dn' => 'Dn',
        'phone' => 'Phone',
        'ramId' => 'RamId',
        'skillLevels' => 'SkillLevels',
        'state' => 'State',
        'stateDesc' => 'StateDesc',
    ];

    public function validate()
    {
        if (null !== $this->skillLevels) {
            $this->skillLevels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->dn) {
            $res['Dn'] = $this->dn;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }

        if (null !== $this->skillLevels) {
            $res['SkillLevels'] = null !== $this->skillLevels ? $this->skillLevels->toArray($noStream) : $this->skillLevels;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->stateDesc) {
            $res['StateDesc'] = $this->stateDesc;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Dn'])) {
            $model->dn = $map['Dn'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }

        if (isset($map['SkillLevels'])) {
            $model->skillLevels = skillLevels::fromMap($map['SkillLevels']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['StateDesc'])) {
            $model->stateDesc = $map['StateDesc'];
        }

        return $model;
    }
}

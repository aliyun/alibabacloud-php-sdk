<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Dara\Model;

class essParam extends Model
{
    /**
     * @var string
     */
    public $essGroupId;

    /**
     * @var string
     */
    public $essRuleId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'essGroupId' => 'essGroupId',
        'essRuleId' => 'essRuleId',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->essGroupId) {
            $res['essGroupId'] = $this->essGroupId;
        }

        if (null !== $this->essRuleId) {
            $res['essRuleId'] = $this->essRuleId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['essGroupId'])) {
            $model->essGroupId = $map['essGroupId'];
        }

        if (isset($map['essRuleId'])) {
            $model->essRuleId = $map['essRuleId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}

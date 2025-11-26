<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView;

use AlibabaCloud\Dara\Model;

class repeatNotifySetting extends Model
{
    /**
     * @var string
     */
    public $endIncidentState;

    /**
     * @var int
     */
    public $repeatInterval;
    protected $_name = [
        'endIncidentState' => 'endIncidentState',
        'repeatInterval' => 'repeatInterval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endIncidentState) {
            $res['endIncidentState'] = $this->endIncidentState;
        }

        if (null !== $this->repeatInterval) {
            $res['repeatInterval'] = $this->repeatInterval;
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
        if (isset($map['endIncidentState'])) {
            $model->endIncidentState = $map['endIncidentState'];
        }

        if (isset($map['repeatInterval'])) {
            $model->repeatInterval = $map['repeatInterval'];
        }

        return $model;
    }
}

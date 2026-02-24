<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleRcaConfig extends Model
{
    /**
     * @var string
     */
    public $digitalEmployeeName;

    /**
     * @var bool
     */
    public $enableRca;
    protected $_name = [
        'digitalEmployeeName' => 'digitalEmployeeName',
        'enableRca' => 'enableRca',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->digitalEmployeeName) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeName;
        }

        if (null !== $this->enableRca) {
            $res['enableRca'] = $this->enableRca;
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
        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeName = $map['digitalEmployeeName'];
        }

        if (isset($map['enableRca'])) {
            $model->enableRca = $map['enableRca'];
        }

        return $model;
    }
}

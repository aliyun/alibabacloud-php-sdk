<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ConfigDataAgentMemoryRequest extends Model
{
    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $recallEnabled;
    protected $_name = [
        'DMSUnit' => 'DMSUnit',
        'enabled' => 'Enabled',
        'recallEnabled' => 'RecallEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DMSUnit) {
            $res['DMSUnit'] = $this->DMSUnit;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->recallEnabled) {
            $res['RecallEnabled'] = $this->recallEnabled;
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
        if (isset($map['DMSUnit'])) {
            $model->DMSUnit = $map['DMSUnit'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['RecallEnabled'])) {
            $model->recallEnabled = $map['RecallEnabled'];
        }

        return $model;
    }
}

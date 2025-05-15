<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;

class ListExperimentPlanTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $privacyLevel;
    protected $_name = [
        'privacyLevel' => 'PrivacyLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privacyLevel) {
            $res['PrivacyLevel'] = $this->privacyLevel;
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
        if (isset($map['PrivacyLevel'])) {
            $model->privacyLevel = $map['PrivacyLevel'];
        }

        return $model;
    }
}

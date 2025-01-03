<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class ListExperimentPlanTemplatesRequest extends Model
{
    /**
     * @description The sharing level of the template, default is private, options are public and private.
     *
     * @example private
     *
     * @var string
     */
    public $privacyLevel;
    protected $_name = [
        'privacyLevel' => 'PrivacyLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privacyLevel) {
            $res['PrivacyLevel'] = $this->privacyLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentPlanTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivacyLevel'])) {
            $model->privacyLevel = $map['PrivacyLevel'];
        }

        return $model;
    }
}

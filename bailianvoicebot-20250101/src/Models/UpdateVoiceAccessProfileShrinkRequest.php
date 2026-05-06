<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class UpdateVoiceAccessProfileShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessProfileId;

    /**
     * @var string
     */
    public $businessUnitId;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var string
     */
    public $profileShrink;
    protected $_name = [
        'accessProfileId' => 'AccessProfileId',
        'businessUnitId' => 'BusinessUnitId',
        'nlsEngine' => 'NlsEngine',
        'profileShrink' => 'Profile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessProfileId) {
            $res['AccessProfileId'] = $this->accessProfileId;
        }

        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->profileShrink) {
            $res['Profile'] = $this->profileShrink;
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
        if (isset($map['AccessProfileId'])) {
            $model->accessProfileId = $map['AccessProfileId'];
        }

        if (isset($map['BusinessUnitId'])) {
            $model->businessUnitId = $map['BusinessUnitId'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['Profile'])) {
            $model->profileShrink = $map['Profile'];
        }

        return $model;
    }
}

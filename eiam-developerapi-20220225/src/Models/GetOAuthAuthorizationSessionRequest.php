<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class GetOAuthAuthorizationSessionRequest extends Model
{
    /**
     * @var string
     */
    public $sessionUri;
    protected $_name = [
        'sessionUri' => 'sessionUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionUri) {
            $res['sessionUri'] = $this->sessionUri;
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
        if (isset($map['sessionUri'])) {
            $model->sessionUri = $map['sessionUri'];
        }

        return $model;
    }
}

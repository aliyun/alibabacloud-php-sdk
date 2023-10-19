<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AuthenticationInfo extends Model
{
    /**
     * @var string
     */
    public $authenticationDisplayName;

    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $identity;
    protected $_name = [
        'authenticationDisplayName' => 'authentication_display_name',
        'authenticationType'        => 'authentication_type',
        'extra'                     => 'extra',
        'identity'                  => 'identity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationDisplayName) {
            $res['authentication_display_name'] = $this->authenticationDisplayName;
        }
        if (null !== $this->authenticationType) {
            $res['authentication_type'] = $this->authenticationType;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->identity) {
            $res['identity'] = $this->identity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthenticationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authentication_display_name'])) {
            $model->authenticationDisplayName = $map['authentication_display_name'];
        }
        if (isset($map['authentication_type'])) {
            $model->authenticationType = $map['authentication_type'];
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['identity'])) {
            $model->identity = $map['identity'];
        }

        return $model;
    }
}

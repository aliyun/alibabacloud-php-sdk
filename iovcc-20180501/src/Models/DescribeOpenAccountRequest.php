<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeOpenAccountRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $idp;

    /**
     * @var string
     */
    public $idToken;

    /**
     * @var string
     */
    public $openId;
    protected $_name = [
        'projectId'  => 'ProjectId',
        'identityId' => 'IdentityId',
        'idp'        => 'Idp',
        'idToken'    => 'IdToken',
        'openId'     => 'OpenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->idp) {
            $res['Idp'] = $this->idp;
        }
        if (null !== $this->idToken) {
            $res['IdToken'] = $this->idToken;
        }
        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOpenAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['Idp'])) {
            $model->idp = $map['Idp'];
        }
        if (isset($map['IdToken'])) {
            $model->idToken = $map['IdToken'];
        }
        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }

        return $model;
    }
}

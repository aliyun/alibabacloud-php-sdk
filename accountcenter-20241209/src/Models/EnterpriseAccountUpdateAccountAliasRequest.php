<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseAccountUpdateAccountAliasRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $encryptTicket;

    /**
     * @var string
     */
    public $orientedEcId;

    /**
     * @var string
     */
    public $orientedLeId;

    /**
     * @var string
     */
    public $orientedNbId;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alias' => 'Alias',
        'appName' => 'AppName',
        'encryptTicket' => 'EncryptTicket',
        'orientedEcId' => 'OrientedEcId',
        'orientedLeId' => 'OrientedLeId',
        'orientedNbId' => 'OrientedNbId',
        'pk' => 'Pk',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->encryptTicket) {
            $res['EncryptTicket'] = $this->encryptTicket;
        }

        if (null !== $this->orientedEcId) {
            $res['OrientedEcId'] = $this->orientedEcId;
        }

        if (null !== $this->orientedLeId) {
            $res['OrientedLeId'] = $this->orientedLeId;
        }

        if (null !== $this->orientedNbId) {
            $res['OrientedNbId'] = $this->orientedNbId;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['EncryptTicket'])) {
            $model->encryptTicket = $map['EncryptTicket'];
        }

        if (isset($map['OrientedEcId'])) {
            $model->orientedEcId = $map['OrientedEcId'];
        }

        if (isset($map['OrientedLeId'])) {
            $model->orientedLeId = $map['OrientedLeId'];
        }

        if (isset($map['OrientedNbId'])) {
            $model->orientedNbId = $map['OrientedNbId'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

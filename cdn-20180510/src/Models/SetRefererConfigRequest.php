<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetRefererConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $referType;

    /**
     * @var string
     */
    public $referList;

    /**
     * @var string
     */
    public $allowEmpty;

    /**
     * @var string
     */
    public $disableAst;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'domainName'    => 'DomainName',
        'referType'     => 'ReferType',
        'referList'     => 'ReferList',
        'allowEmpty'    => 'AllowEmpty',
        'disableAst'    => 'DisableAst',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->referType) {
            $res['ReferType'] = $this->referType;
        }
        if (null !== $this->referList) {
            $res['ReferList'] = $this->referList;
        }
        if (null !== $this->allowEmpty) {
            $res['AllowEmpty'] = $this->allowEmpty;
        }
        if (null !== $this->disableAst) {
            $res['DisableAst'] = $this->disableAst;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRefererConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ReferType'])) {
            $model->referType = $map['ReferType'];
        }
        if (isset($map['ReferList'])) {
            $model->referList = $map['ReferList'];
        }
        if (isset($map['AllowEmpty'])) {
            $model->allowEmpty = $map['AllowEmpty'];
        }
        if (isset($map['DisableAst'])) {
            $model->disableAst = $map['DisableAst'];
        }

        return $model;
    }
}

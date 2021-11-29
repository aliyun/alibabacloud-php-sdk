<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetRefererConfigRequest extends Model
{
    /**
     * @var string
     */
    public $allowEmpty;

    /**
     * @var string
     */
    public $disableAst;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $referList;

    /**
     * @var string
     */
    public $referType;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'allowEmpty'    => 'AllowEmpty',
        'disableAst'    => 'DisableAst',
        'domainName'    => 'DomainName',
        'ownerId'       => 'OwnerId',
        'referList'     => 'ReferList',
        'referType'     => 'ReferType',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowEmpty) {
            $res['AllowEmpty'] = $this->allowEmpty;
        }
        if (null !== $this->disableAst) {
            $res['DisableAst'] = $this->disableAst;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->referList) {
            $res['ReferList'] = $this->referList;
        }
        if (null !== $this->referType) {
            $res['ReferType'] = $this->referType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['AllowEmpty'])) {
            $model->allowEmpty = $map['AllowEmpty'];
        }
        if (isset($map['DisableAst'])) {
            $model->disableAst = $map['DisableAst'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReferList'])) {
            $model->referList = $map['ReferList'];
        }
        if (isset($map['ReferType'])) {
            $model->referType = $map['ReferType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class SetWildcardDomainPatternsRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $wildcardDomainPatterns;
    protected $_name = [
        'domainName' => 'DomainName',
        'groupId' => 'GroupId',
        'securityToken' => 'SecurityToken',
        'wildcardDomainPatterns' => 'WildcardDomainPatterns',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->wildcardDomainPatterns) {
            $res['WildcardDomainPatterns'] = $this->wildcardDomainPatterns;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['WildcardDomainPatterns'])) {
            $model->wildcardDomainPatterns = $map['WildcardDomainPatterns'];
        }

        return $model;
    }
}

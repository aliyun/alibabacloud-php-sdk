<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetErrorPageConfigRequest extends Model
{
    /**
     * @var string
     */
    public $customPageUrl;

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
    public $pageType;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'customPageUrl' => 'CustomPageUrl',
        'domainName'    => 'DomainName',
        'ownerId'       => 'OwnerId',
        'pageType'      => 'PageType',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customPageUrl) {
            $res['CustomPageUrl'] = $this->customPageUrl;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageType) {
            $res['PageType'] = $this->pageType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetErrorPageConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomPageUrl'])) {
            $model->customPageUrl = $map['CustomPageUrl'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageType'])) {
            $model->pageType = $map['PageType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

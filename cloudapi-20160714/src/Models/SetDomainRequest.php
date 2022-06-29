<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetDomainRequest extends Model
{
    /**
     * @var string
     */
    public $bindStageName;

    /**
     * @var string
     */
    public $customDomainType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $isForce;

    /**
     * @var bool
     */
    public $isHttpRedirectToHttps;
    protected $_name = [
        'bindStageName'         => 'BindStageName',
        'customDomainType'      => 'CustomDomainType',
        'domainName'            => 'DomainName',
        'groupId'               => 'GroupId',
        'isForce'               => 'IsForce',
        'isHttpRedirectToHttps' => 'IsHttpRedirectToHttps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindStageName) {
            $res['BindStageName'] = $this->bindStageName;
        }
        if (null !== $this->customDomainType) {
            $res['CustomDomainType'] = $this->customDomainType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isForce) {
            $res['IsForce'] = $this->isForce;
        }
        if (null !== $this->isHttpRedirectToHttps) {
            $res['IsHttpRedirectToHttps'] = $this->isHttpRedirectToHttps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindStageName'])) {
            $model->bindStageName = $map['BindStageName'];
        }
        if (isset($map['CustomDomainType'])) {
            $model->customDomainType = $map['CustomDomainType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsForce'])) {
            $model->isForce = $map['IsForce'];
        }
        if (isset($map['IsHttpRedirectToHttps'])) {
            $model->isHttpRedirectToHttps = $map['IsHttpRedirectToHttps'];
        }

        return $model;
    }
}

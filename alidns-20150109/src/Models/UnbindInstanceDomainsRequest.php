<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UnbindInstanceDomainsRequest extends Model
{
    /**
     * @description The list of domain names.
     *
     * Separate multiple domain names with commas (,). A maximum of 100 domain names can be entered.
     * @example example.com,example.net
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The ID of the instance.
     *
     * @example 123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'instanceId'  => 'InstanceId',
        'lang'        => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindInstanceDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}

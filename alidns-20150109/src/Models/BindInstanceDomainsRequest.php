<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class BindInstanceDomainsRequest extends Model
{
    /**
     * @description The domain names.
     *
     * This parameter is required.
     * @example example.com,example.net
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example sdfasdf
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language.
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
     * @return BindInstanceDomainsRequest
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

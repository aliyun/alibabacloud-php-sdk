<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ChangeDomainOfDnsProductRequest extends Model
{
    /**
     * @description Specifies whether to force bind a domain name to the instance.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The ID of the Alibaba Cloud DNS instance.
     *
     * @example i-7sb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language in which you want the values of some response parameters to be returned. These response parameters support multiple languages.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The domain name that you want to bind to the instance. If you do not specify this parameter, this operation unbinds the original domain name from the instance.
     *
     * @example newdomain.com
     *
     * @var string
     */
    public $newDomain;

    /**
     * @description The IP address of the client.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'force'        => 'Force',
        'instanceId'   => 'InstanceId',
        'lang'         => 'Lang',
        'newDomain'    => 'NewDomain',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->newDomain) {
            $res['NewDomain'] = $this->newDomain;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeDomainOfDnsProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NewDomain'])) {
            $model->newDomain = $map['NewDomain'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}

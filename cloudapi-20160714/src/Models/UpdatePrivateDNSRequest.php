<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UpdatePrivateDNSRequest\records;
use AlibabaCloud\Tea\Model;

class UpdatePrivateDNSRequest extends Model
{
    /**
     * @description The internal domain name.
     *
     * This parameter is required.
     *
     * @example api.demo.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @description The resolution records. This parameter is valid only when Type is set to A.
     *
     * This parameter is required.
     *
     * @var records[]
     */
    public $records;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The internal domain name resolution type. Valid values:
     *
     *   VPC: resolution for virtual private cloud (VPC) access authorizations. A resolution of this type can be bound only to traditional dedicated instances.
     *   A: resolution that supports A records. A resolution of this type can be bound only to VPC integration dedicated instances.
     *
     * This parameter is required.
     *
     * @example A
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'intranetDomain' => 'IntranetDomain',
        'records' => 'Records',
        'securityToken' => 'SecurityToken',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrivateDNSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListPrivateDNSResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListPrivateDNSResponseBody\privateDNSList\records;
use AlibabaCloud\Tea\Model;

class privateDNSList extends Model
{
    /**
     * @description The instances that are associated with the resolution.
     *
     * @var string[]
     */
    public $bindInstances;

    /**
     * @description The time when the resolution was created. The time is displayed in UTC.
     *
     * @example 2023-05-10T08:17:00Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The internal domain name.
     *
     * @example api.demo.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @description The resolution records.
     *
     * @var records[]
     */
    public $records;

    /**
     * @description The internal domain name resolution type. Valid values:
     *
     *   VPC: resolution for VPC access authorizations. A resolution of this type can be bound only to traditional dedicated instances.
     *   A: resolution that supports A records. A resolution of this type can be bound only to VPC integration dedicated instances.
     *
     * @example A
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bindInstances'  => 'BindInstances',
        'createdTime'    => 'CreatedTime',
        'intranetDomain' => 'IntranetDomain',
        'records'        => 'Records',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindInstances) {
            $res['BindInstances'] = $this->bindInstances;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateDNSList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindInstances'])) {
            if (!empty($map['BindInstances'])) {
                $model->bindInstances = $map['BindInstances'];
            }
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest\forwardIp;
use AlibabaCloud\Tea\Model;

class AddResolverRuleRequest extends Model
{
    /**
     * @example hra0**
     *
     * @var string
     */
    public $endpointId;

    /**
     * @var forwardIp[]
     */
    public $forwardIp;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @example OUTBOUND
     *
     * @var string
     */
    public $type;

    /**
     * @example example.com
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'forwardIp'  => 'ForwardIp',
        'lang'       => 'Lang',
        'name'       => 'Name',
        'type'       => 'Type',
        'zoneName'   => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->forwardIp) {
            $res['ForwardIp'] = [];
            if (null !== $this->forwardIp && \is_array($this->forwardIp)) {
                $n = 0;
                foreach ($this->forwardIp as $item) {
                    $res['ForwardIp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddResolverRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ForwardIp'])) {
            if (!empty($map['ForwardIp'])) {
                $model->forwardIp = [];
                $n                = 0;
                foreach ($map['ForwardIp'] as $item) {
                    $model->forwardIp[$n++] = null !== $item ? forwardIp::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}

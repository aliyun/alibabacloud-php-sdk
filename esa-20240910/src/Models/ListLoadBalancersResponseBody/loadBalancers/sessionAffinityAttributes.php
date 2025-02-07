<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Dara\Model;

class sessionAffinityAttributes extends Model
{
    /**
     * @var string
     */
    public $sameSite;
    /**
     * @var string
     */
    public $secure;
    /**
     * @var string
     */
    public $zeroDowntimeFailover;
    protected $_name = [
        'sameSite'             => 'SameSite',
        'secure'               => 'Secure',
        'zeroDowntimeFailover' => 'ZeroDowntimeFailover',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sameSite) {
            $res['SameSite'] = $this->sameSite;
        }

        if (null !== $this->secure) {
            $res['Secure'] = $this->secure;
        }

        if (null !== $this->zeroDowntimeFailover) {
            $res['ZeroDowntimeFailover'] = $this->zeroDowntimeFailover;
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
        if (isset($map['SameSite'])) {
            $model->sameSite = $map['SameSite'];
        }

        if (isset($map['Secure'])) {
            $model->secure = $map['Secure'];
        }

        if (isset($map['ZeroDowntimeFailover'])) {
            $model->zeroDowntimeFailover = $map['ZeroDowntimeFailover'];
        }

        return $model;
    }
}

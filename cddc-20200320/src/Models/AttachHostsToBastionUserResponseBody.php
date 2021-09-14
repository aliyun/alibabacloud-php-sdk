<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\AttachHostsToBastionUserResponseBody\hosts;
use AlibabaCloud\Tea\Model;

class AttachHostsToBastionUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @var string
     */
    public $bastionUser;

    /**
     * @var hosts[]
     */
    public $hosts;
    protected $_name = [
        'requestId'         => 'RequestId',
        'bastionInstanceId' => 'BastionInstanceId',
        'bastionUser'       => 'BastionUser',
        'hosts'             => 'Hosts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }
        if (null !== $this->bastionUser) {
            $res['BastionUser'] = $this->bastionUser;
        }
        if (null !== $this->hosts) {
            $res['Hosts'] = [];
            if (null !== $this->hosts && \is_array($this->hosts)) {
                $n = 0;
                foreach ($this->hosts as $item) {
                    $res['Hosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachHostsToBastionUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if (isset($map['BastionUser'])) {
            $model->bastionUser = $map['BastionUser'];
        }
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n            = 0;
                foreach ($map['Hosts'] as $item) {
                    $model->hosts[$n++] = null !== $item ? hosts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

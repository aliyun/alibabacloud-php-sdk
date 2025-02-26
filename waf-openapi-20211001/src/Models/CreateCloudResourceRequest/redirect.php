<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest\redirect\requestHeaders;

class redirect extends Model
{
    /**
     * @var bool
     */
    public $keepalive;
    /**
     * @var int
     */
    public $keepaliveRequests;
    /**
     * @var int
     */
    public $keepaliveTimeout;
    /**
     * @var int
     */
    public $readTimeout;
    /**
     * @var requestHeaders[]
     */
    public $requestHeaders;
    /**
     * @var int
     */
    public $writeTimeout;
    /**
     * @var int
     */
    public $xffHeaderMode;
    /**
     * @var string[]
     */
    public $xffHeaders;
    /**
     * @var bool
     */
    public $xffProto;
    protected $_name = [
        'keepalive'         => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout'  => 'KeepaliveTimeout',
        'readTimeout'       => 'ReadTimeout',
        'requestHeaders'    => 'RequestHeaders',
        'writeTimeout'      => 'WriteTimeout',
        'xffHeaderMode'     => 'XffHeaderMode',
        'xffHeaders'        => 'XffHeaders',
        'xffProto'          => 'XffProto',
    ];

    public function validate()
    {
        if (\is_array($this->requestHeaders)) {
            Model::validateArray($this->requestHeaders);
        }
        if (\is_array($this->xffHeaders)) {
            Model::validateArray($this->xffHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }

        if (null !== $this->keepaliveRequests) {
            $res['KeepaliveRequests'] = $this->keepaliveRequests;
        }

        if (null !== $this->keepaliveTimeout) {
            $res['KeepaliveTimeout'] = $this->keepaliveTimeout;
        }

        if (null !== $this->readTimeout) {
            $res['ReadTimeout'] = $this->readTimeout;
        }

        if (null !== $this->requestHeaders) {
            if (\is_array($this->requestHeaders)) {
                $res['RequestHeaders'] = [];
                $n1                    = 0;
                foreach ($this->requestHeaders as $item1) {
                    $res['RequestHeaders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->writeTimeout) {
            $res['WriteTimeout'] = $this->writeTimeout;
        }

        if (null !== $this->xffHeaderMode) {
            $res['XffHeaderMode'] = $this->xffHeaderMode;
        }

        if (null !== $this->xffHeaders) {
            if (\is_array($this->xffHeaders)) {
                $res['XffHeaders'] = [];
                $n1                = 0;
                foreach ($this->xffHeaders as $item1) {
                    $res['XffHeaders'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->xffProto) {
            $res['XffProto'] = $this->xffProto;
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
        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }

        if (isset($map['KeepaliveRequests'])) {
            $model->keepaliveRequests = $map['KeepaliveRequests'];
        }

        if (isset($map['KeepaliveTimeout'])) {
            $model->keepaliveTimeout = $map['KeepaliveTimeout'];
        }

        if (isset($map['ReadTimeout'])) {
            $model->readTimeout = $map['ReadTimeout'];
        }

        if (isset($map['RequestHeaders'])) {
            if (!empty($map['RequestHeaders'])) {
                $model->requestHeaders = [];
                $n1                    = 0;
                foreach ($map['RequestHeaders'] as $item1) {
                    $model->requestHeaders[$n1++] = requestHeaders::fromMap($item1);
                }
            }
        }

        if (isset($map['WriteTimeout'])) {
            $model->writeTimeout = $map['WriteTimeout'];
        }

        if (isset($map['XffHeaderMode'])) {
            $model->xffHeaderMode = $map['XffHeaderMode'];
        }

        if (isset($map['XffHeaders'])) {
            if (!empty($map['XffHeaders'])) {
                $model->xffHeaders = [];
                $n1                = 0;
                foreach ($map['XffHeaders'] as $item1) {
                    $model->xffHeaders[$n1++] = $item1;
                }
            }
        }

        if (isset($map['XffProto'])) {
            $model->xffProto = $map['XffProto'];
        }

        return $model;
    }
}

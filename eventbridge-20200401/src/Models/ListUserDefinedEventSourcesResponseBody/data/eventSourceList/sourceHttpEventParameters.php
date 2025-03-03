<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList;

use AlibabaCloud\Dara\Model;

class sourceHttpEventParameters extends Model
{
    /**
     * @var string[]
     */
    public $ip;
    /**
     * @var string[]
     */
    public $method;
    /**
     * @var string[]
     */
    public $publicWebHookUrl;
    /**
     * @var string[]
     */
    public $referer;
    /**
     * @var string
     */
    public $securityConfig;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string[]
     */
    public $vpcWebHookUrl;
    protected $_name = [
        'ip'               => 'Ip',
        'method'           => 'Method',
        'publicWebHookUrl' => 'PublicWebHookUrl',
        'referer'          => 'Referer',
        'securityConfig'   => 'SecurityConfig',
        'type'             => 'Type',
        'vpcWebHookUrl'    => 'VpcWebHookUrl',
    ];

    public function validate()
    {
        if (\is_array($this->ip)) {
            Model::validateArray($this->ip);
        }
        if (\is_array($this->method)) {
            Model::validateArray($this->method);
        }
        if (\is_array($this->publicWebHookUrl)) {
            Model::validateArray($this->publicWebHookUrl);
        }
        if (\is_array($this->referer)) {
            Model::validateArray($this->referer);
        }
        if (\is_array($this->vpcWebHookUrl)) {
            Model::validateArray($this->vpcWebHookUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            if (\is_array($this->ip)) {
                $res['Ip'] = [];
                $n1        = 0;
                foreach ($this->ip as $item1) {
                    $res['Ip'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->method) {
            if (\is_array($this->method)) {
                $res['Method'] = [];
                $n1            = 0;
                foreach ($this->method as $item1) {
                    $res['Method'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->publicWebHookUrl) {
            if (\is_array($this->publicWebHookUrl)) {
                $res['PublicWebHookUrl'] = [];
                $n1                      = 0;
                foreach ($this->publicWebHookUrl as $item1) {
                    $res['PublicWebHookUrl'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->referer) {
            if (\is_array($this->referer)) {
                $res['Referer'] = [];
                $n1             = 0;
                foreach ($this->referer as $item1) {
                    $res['Referer'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->securityConfig) {
            $res['SecurityConfig'] = $this->securityConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vpcWebHookUrl) {
            if (\is_array($this->vpcWebHookUrl)) {
                $res['VpcWebHookUrl'] = [];
                $n1                   = 0;
                foreach ($this->vpcWebHookUrl as $item1) {
                    $res['VpcWebHookUrl'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Ip'])) {
            if (!empty($map['Ip'])) {
                $model->ip = [];
                $n1        = 0;
                foreach ($map['Ip'] as $item1) {
                    $model->ip[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Method'])) {
            if (!empty($map['Method'])) {
                $model->method = [];
                $n1            = 0;
                foreach ($map['Method'] as $item1) {
                    $model->method[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PublicWebHookUrl'])) {
            if (!empty($map['PublicWebHookUrl'])) {
                $model->publicWebHookUrl = [];
                $n1                      = 0;
                foreach ($map['PublicWebHookUrl'] as $item1) {
                    $model->publicWebHookUrl[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Referer'])) {
            if (!empty($map['Referer'])) {
                $model->referer = [];
                $n1             = 0;
                foreach ($map['Referer'] as $item1) {
                    $model->referer[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SecurityConfig'])) {
            $model->securityConfig = $map['SecurityConfig'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VpcWebHookUrl'])) {
            if (!empty($map['VpcWebHookUrl'])) {
                $model->vpcWebHookUrl = [];
                $n1                   = 0;
                foreach ($map['VpcWebHookUrl'] as $item1) {
                    $model->vpcWebHookUrl[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

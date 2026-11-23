<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data;

use AlibabaCloud\Dara\Model;

class observations extends Model
{
    /**
     * @var string
     */
    public $backendMcpProtocol;

    /**
     * @var bool
     */
    public $declared;

    /**
     * @var string[]
     */
    public $declaredVersions;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $negotiatedVersion;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $sessionMode;

    /**
     * @var string
     */
    public $verificationStatus;
    protected $_name = [
        'backendMcpProtocol' => 'backendMcpProtocol',
        'declared' => 'declared',
        'declaredVersions' => 'declaredVersions',
        'endpoint' => 'endpoint',
        'negotiatedVersion' => 'negotiatedVersion',
        'protocol' => 'protocol',
        'sessionMode' => 'sessionMode',
        'verificationStatus' => 'verificationStatus',
    ];

    public function validate()
    {
        if (\is_array($this->declaredVersions)) {
            Model::validateArray($this->declaredVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendMcpProtocol) {
            $res['backendMcpProtocol'] = $this->backendMcpProtocol;
        }

        if (null !== $this->declared) {
            $res['declared'] = $this->declared;
        }

        if (null !== $this->declaredVersions) {
            if (\is_array($this->declaredVersions)) {
                $res['declaredVersions'] = [];
                $n1 = 0;
                foreach ($this->declaredVersions as $item1) {
                    $res['declaredVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->negotiatedVersion) {
            $res['negotiatedVersion'] = $this->negotiatedVersion;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->sessionMode) {
            $res['sessionMode'] = $this->sessionMode;
        }

        if (null !== $this->verificationStatus) {
            $res['verificationStatus'] = $this->verificationStatus;
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
        if (isset($map['backendMcpProtocol'])) {
            $model->backendMcpProtocol = $map['backendMcpProtocol'];
        }

        if (isset($map['declared'])) {
            $model->declared = $map['declared'];
        }

        if (isset($map['declaredVersions'])) {
            if (!empty($map['declaredVersions'])) {
                $model->declaredVersions = [];
                $n1 = 0;
                foreach ($map['declaredVersions'] as $item1) {
                    $model->declaredVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['negotiatedVersion'])) {
            $model->negotiatedVersion = $map['negotiatedVersion'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['sessionMode'])) {
            $model->sessionMode = $map['sessionMode'];
        }

        if (isset($map['verificationStatus'])) {
            $model->verificationStatus = $map['verificationStatus'];
        }

        return $model;
    }
}

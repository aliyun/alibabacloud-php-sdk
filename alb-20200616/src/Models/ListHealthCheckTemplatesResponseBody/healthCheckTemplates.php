<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponseBody\healthCheckTemplates\tags;

class healthCheckTemplates extends Model
{
    /**
     * @var string[]
     */
    public $healthCheckCodes;
    /**
     * @var int
     */
    public $healthCheckConnectPort;
    /**
     * @var string
     */
    public $healthCheckHost;
    /**
     * @var string
     */
    public $healthCheckHttpVersion;
    /**
     * @var int
     */
    public $healthCheckInterval;
    /**
     * @var string
     */
    public $healthCheckMethod;
    /**
     * @var string
     */
    public $healthCheckPath;
    /**
     * @var string
     */
    public $healthCheckProtocol;
    /**
     * @var string
     */
    public $healthCheckTemplateId;
    /**
     * @var string
     */
    public $healthCheckTemplateName;
    /**
     * @var int
     */
    public $healthCheckTimeout;
    /**
     * @var int
     */
    public $healthyThreshold;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'healthCheckCodes'        => 'HealthCheckCodes',
        'healthCheckConnectPort'  => 'HealthCheckConnectPort',
        'healthCheckHost'         => 'HealthCheckHost',
        'healthCheckHttpVersion'  => 'HealthCheckHttpVersion',
        'healthCheckInterval'     => 'HealthCheckInterval',
        'healthCheckMethod'       => 'HealthCheckMethod',
        'healthCheckPath'         => 'HealthCheckPath',
        'healthCheckProtocol'     => 'HealthCheckProtocol',
        'healthCheckTemplateId'   => 'HealthCheckTemplateId',
        'healthCheckTemplateName' => 'HealthCheckTemplateName',
        'healthCheckTimeout'      => 'HealthCheckTimeout',
        'healthyThreshold'        => 'HealthyThreshold',
        'tags'                    => 'Tags',
        'unhealthyThreshold'      => 'UnhealthyThreshold',
    ];

    public function validate()
    {
        if (\is_array($this->healthCheckCodes)) {
            Model::validateArray($this->healthCheckCodes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckCodes) {
            if (\is_array($this->healthCheckCodes)) {
                $res['HealthCheckCodes'] = [];
                $n1                      = 0;
                foreach ($this->healthCheckCodes as $item1) {
                    $res['HealthCheckCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }

        if (null !== $this->healthCheckHost) {
            $res['HealthCheckHost'] = $this->healthCheckHost;
        }

        if (null !== $this->healthCheckHttpVersion) {
            $res['HealthCheckHttpVersion'] = $this->healthCheckHttpVersion;
        }

        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }

        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }

        if (null !== $this->healthCheckPath) {
            $res['HealthCheckPath'] = $this->healthCheckPath;
        }

        if (null !== $this->healthCheckProtocol) {
            $res['HealthCheckProtocol'] = $this->healthCheckProtocol;
        }

        if (null !== $this->healthCheckTemplateId) {
            $res['HealthCheckTemplateId'] = $this->healthCheckTemplateId;
        }

        if (null !== $this->healthCheckTemplateName) {
            $res['HealthCheckTemplateName'] = $this->healthCheckTemplateName;
        }

        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }

        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
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
        if (isset($map['HealthCheckCodes'])) {
            if (!empty($map['HealthCheckCodes'])) {
                $model->healthCheckCodes = [];
                $n1                      = 0;
                foreach ($map['HealthCheckCodes'] as $item1) {
                    $model->healthCheckCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }

        if (isset($map['HealthCheckHost'])) {
            $model->healthCheckHost = $map['HealthCheckHost'];
        }

        if (isset($map['HealthCheckHttpVersion'])) {
            $model->healthCheckHttpVersion = $map['HealthCheckHttpVersion'];
        }

        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }

        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }

        if (isset($map['HealthCheckPath'])) {
            $model->healthCheckPath = $map['HealthCheckPath'];
        }

        if (isset($map['HealthCheckProtocol'])) {
            $model->healthCheckProtocol = $map['HealthCheckProtocol'];
        }

        if (isset($map['HealthCheckTemplateId'])) {
            $model->healthCheckTemplateId = $map['HealthCheckTemplateId'];
        }

        if (isset($map['HealthCheckTemplateName'])) {
            $model->healthCheckTemplateName = $map['HealthCheckTemplateName'];
        }

        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }

        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}

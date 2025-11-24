<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $intranetApiServerEndpoint;

    /**
     * @var string
     */
    public $intranetCanaryPilotEndpoint;

    /**
     * @var string
     */
    public $intranetPilotEndpoint;

    /**
     * @var string
     */
    public $publicApiServerEndpoint;

    /**
     * @var string
     */
    public $publicCanaryPilotEndpoint;

    /**
     * @var string
     */
    public $publicPilotEndpoint;
    protected $_name = [
        'intranetApiServerEndpoint' => 'IntranetApiServerEndpoint',
        'intranetCanaryPilotEndpoint' => 'IntranetCanaryPilotEndpoint',
        'intranetPilotEndpoint' => 'IntranetPilotEndpoint',
        'publicApiServerEndpoint' => 'PublicApiServerEndpoint',
        'publicCanaryPilotEndpoint' => 'PublicCanaryPilotEndpoint',
        'publicPilotEndpoint' => 'PublicPilotEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intranetApiServerEndpoint) {
            $res['IntranetApiServerEndpoint'] = $this->intranetApiServerEndpoint;
        }

        if (null !== $this->intranetCanaryPilotEndpoint) {
            $res['IntranetCanaryPilotEndpoint'] = $this->intranetCanaryPilotEndpoint;
        }

        if (null !== $this->intranetPilotEndpoint) {
            $res['IntranetPilotEndpoint'] = $this->intranetPilotEndpoint;
        }

        if (null !== $this->publicApiServerEndpoint) {
            $res['PublicApiServerEndpoint'] = $this->publicApiServerEndpoint;
        }

        if (null !== $this->publicCanaryPilotEndpoint) {
            $res['PublicCanaryPilotEndpoint'] = $this->publicCanaryPilotEndpoint;
        }

        if (null !== $this->publicPilotEndpoint) {
            $res['PublicPilotEndpoint'] = $this->publicPilotEndpoint;
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
        if (isset($map['IntranetApiServerEndpoint'])) {
            $model->intranetApiServerEndpoint = $map['IntranetApiServerEndpoint'];
        }

        if (isset($map['IntranetCanaryPilotEndpoint'])) {
            $model->intranetCanaryPilotEndpoint = $map['IntranetCanaryPilotEndpoint'];
        }

        if (isset($map['IntranetPilotEndpoint'])) {
            $model->intranetPilotEndpoint = $map['IntranetPilotEndpoint'];
        }

        if (isset($map['PublicApiServerEndpoint'])) {
            $model->publicApiServerEndpoint = $map['PublicApiServerEndpoint'];
        }

        if (isset($map['PublicCanaryPilotEndpoint'])) {
            $model->publicCanaryPilotEndpoint = $map['PublicCanaryPilotEndpoint'];
        }

        if (isset($map['PublicPilotEndpoint'])) {
            $model->publicPilotEndpoint = $map['PublicPilotEndpoint'];
        }

        return $model;
    }
}

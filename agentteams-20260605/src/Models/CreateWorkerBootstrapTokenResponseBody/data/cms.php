<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerBootstrapTokenResponseBody\data;

use AlibabaCloud\Dara\Model;

class cms extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $licenseKey;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'licenseKey' => 'LicenseKey',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }

        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentBootstrapTokenResponseBody\data;

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
        'endpoint' => 'endpoint',
        'licenseKey' => 'licenseKey',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->licenseKey) {
            $res['licenseKey'] = $this->licenseKey;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['licenseKey'])) {
            $model->licenseKey = $map['licenseKey'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

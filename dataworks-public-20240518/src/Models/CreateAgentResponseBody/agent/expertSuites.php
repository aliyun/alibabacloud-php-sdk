<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentResponseBody\agent;

use AlibabaCloud\Dara\Model;

class expertSuites extends Model
{
    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $suiteId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'packageVersion' => 'PackageVersion',
        'source' => 'Source',
        'suiteId' => 'SuiteId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->suiteId) {
            $res['SuiteId'] = $this->suiteId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SuiteId'])) {
            $model->suiteId = $map['SuiteId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

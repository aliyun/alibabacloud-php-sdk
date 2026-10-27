<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody\agent;

use AlibabaCloud\Dara\Model;

class expertSuites extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $semanticVersion;

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
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'packageVersion' => 'PackageVersion',
        'semanticVersion' => 'SemanticVersion',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }

        if (null !== $this->semanticVersion) {
            $res['SemanticVersion'] = $this->semanticVersion;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }

        if (isset($map['SemanticVersion'])) {
            $model->semanticVersion = $map['SemanticVersion'];
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

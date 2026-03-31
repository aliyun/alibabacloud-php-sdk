<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class CreateDeployRevisionRequest extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $deployResourceType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hooks;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $revisionType;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'deployResourceType' => 'DeployResourceType',
        'description' => 'Description',
        'hooks' => 'Hooks',
        'location' => 'Location',
        'revisionType' => 'RevisionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->deployResourceType) {
            $res['DeployResourceType'] = $this->deployResourceType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hooks) {
            $res['Hooks'] = $this->hooks;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->revisionType) {
            $res['RevisionType'] = $this->revisionType;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['DeployResourceType'])) {
            $model->deployResourceType = $map['DeployResourceType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Hooks'])) {
            $model->hooks = $map['Hooks'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['RevisionType'])) {
            $model->revisionType = $map['RevisionType'];
        }

        return $model;
    }
}

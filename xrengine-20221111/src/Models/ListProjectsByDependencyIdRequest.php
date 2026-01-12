<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class ListProjectsByDependencyIdRequest extends Model
{
    /**
     * @var int
     */
    public $dependencyProjectId;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $mapUuid;

    /**
     * @var bool
     */
    public $withDataset;

    /**
     * @var bool
     */
    public $withSource;
    protected $_name = [
        'dependencyProjectId' => 'DependencyProjectId',
        'jwtToken' => 'JwtToken',
        'mapUuid' => 'MapUuid',
        'withDataset' => 'WithDataset',
        'withSource' => 'WithSource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependencyProjectId) {
            $res['DependencyProjectId'] = $this->dependencyProjectId;
        }

        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->mapUuid) {
            $res['MapUuid'] = $this->mapUuid;
        }

        if (null !== $this->withDataset) {
            $res['WithDataset'] = $this->withDataset;
        }

        if (null !== $this->withSource) {
            $res['WithSource'] = $this->withSource;
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
        if (isset($map['DependencyProjectId'])) {
            $model->dependencyProjectId = $map['DependencyProjectId'];
        }

        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['MapUuid'])) {
            $model->mapUuid = $map['MapUuid'];
        }

        if (isset($map['WithDataset'])) {
            $model->withDataset = $map['WithDataset'];
        }

        if (isset($map['WithSource'])) {
            $model->withSource = $map['WithSource'];
        }

        return $model;
    }
}

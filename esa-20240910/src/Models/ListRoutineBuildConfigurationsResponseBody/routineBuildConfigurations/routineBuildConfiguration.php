<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineBuildConfigurationsResponseBody\routineBuildConfigurations;

use AlibabaCloud\Dara\Model;

class routineBuildConfiguration extends Model
{
    /**
     * @var string
     */
    public $gitAccountName;

    /**
     * @var string
     */
    public $gitPlatform;

    /**
     * @var string
     */
    public $productionBranch;

    /**
     * @var string
     */
    public $repository;

    /**
     * @var string
     */
    public $routineName;
    protected $_name = [
        'gitAccountName' => 'GitAccountName',
        'gitPlatform' => 'GitPlatform',
        'productionBranch' => 'ProductionBranch',
        'repository' => 'Repository',
        'routineName' => 'RoutineName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gitAccountName) {
            $res['GitAccountName'] = $this->gitAccountName;
        }

        if (null !== $this->gitPlatform) {
            $res['GitPlatform'] = $this->gitPlatform;
        }

        if (null !== $this->productionBranch) {
            $res['ProductionBranch'] = $this->productionBranch;
        }

        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
        }

        if (null !== $this->routineName) {
            $res['RoutineName'] = $this->routineName;
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
        if (isset($map['GitAccountName'])) {
            $model->gitAccountName = $map['GitAccountName'];
        }

        if (isset($map['GitPlatform'])) {
            $model->gitPlatform = $map['GitPlatform'];
        }

        if (isset($map['ProductionBranch'])) {
            $model->productionBranch = $map['ProductionBranch'];
        }

        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }

        if (isset($map['RoutineName'])) {
            $model->routineName = $map['RoutineName'];
        }

        return $model;
    }
}

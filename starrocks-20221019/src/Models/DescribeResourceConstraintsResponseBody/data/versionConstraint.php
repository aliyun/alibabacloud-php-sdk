<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data;

use AlibabaCloud\Dara\Model;

class versionConstraint extends Model
{
    /**
     * @var string[]
     */
    public $betaVersions;

    /**
     * @var string
     */
    public $defaultVersion;

    /**
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'betaVersions' => 'BetaVersions',
        'defaultVersion' => 'DefaultVersion',
        'versions' => 'Versions',
    ];

    public function validate()
    {
        if (\is_array($this->betaVersions)) {
            Model::validateArray($this->betaVersions);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->betaVersions) {
            if (\is_array($this->betaVersions)) {
                $res['BetaVersions'] = [];
                $n1 = 0;
                foreach ($this->betaVersions as $item1) {
                    $res['BetaVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BetaVersions'])) {
            if (!empty($map['BetaVersions'])) {
                $model->betaVersions = [];
                $n1 = 0;
                foreach ($map['BetaVersions'] as $item1) {
                    $model->betaVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }

        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

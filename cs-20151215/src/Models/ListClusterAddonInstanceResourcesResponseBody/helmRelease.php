<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterAddonInstanceResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class helmRelease extends Model
{
    /**
     * @var string
     */
    public $chartName;

    /**
     * @var string
     */
    public $chartVersion;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $releaseName;
    protected $_name = [
        'chartName' => 'chart_name',
        'chartVersion' => 'chart_version',
        'namespace' => 'namespace',
        'releaseName' => 'release_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chartName) {
            $res['chart_name'] = $this->chartName;
        }

        if (null !== $this->chartVersion) {
            $res['chart_version'] = $this->chartVersion;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->releaseName) {
            $res['release_name'] = $this->releaseName;
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
        if (isset($map['chart_name'])) {
            $model->chartName = $map['chart_name'];
        }

        if (isset($map['chart_version'])) {
            $model->chartVersion = $map['chart_version'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['release_name'])) {
            $model->releaseName = $map['release_name'];
        }

        return $model;
    }
}

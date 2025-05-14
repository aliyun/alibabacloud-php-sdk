<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonResponseBody;

use AlibabaCloud\Dara\Model;

class newerVersions extends Model
{
    /**
     * @var string
     */
    public $minimumClusterVersion;

    /**
     * @var bool
     */
    public $upgradable;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'minimumClusterVersion' => 'minimum_cluster_version',
        'upgradable' => 'upgradable',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->minimumClusterVersion) {
            $res['minimum_cluster_version'] = $this->minimumClusterVersion;
        }

        if (null !== $this->upgradable) {
            $res['upgradable'] = $this->upgradable;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['minimum_cluster_version'])) {
            $model->minimumClusterVersion = $map['minimum_cluster_version'];
        }

        if (isset($map['upgradable'])) {
            $model->upgradable = $map['upgradable'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponseBody\availableZones\supportedEngines;

use AlibabaCloud\Tea\Model;

class availableResources extends Model
{
    /**
     * @description The edition of the cluster. Valid values:
     *
     *   **Normal**: Cluster Edition.
     *   **Basic**: Single Node Edition.
     *   **ArchiveNormal**: X-Engine.
     *   **NormalMultimaster**: Multi-master Cluster (Database/Table) Edition.
     *   **SENormal**: Standard Edition.
     *
     * >- Only PolarDB for MySQL 8.0 supports X-Engine Edition and Multi-master Cluster (Database/Table) Edition.
     * @example Normal
     *
     * @var string
     */
    public $category;

    /**
     * @description The specifications of the node.
     *
     * @example polar.mysql.x4.large
     *
     * @var string
     */
    public $DBNodeClass;
    protected $_name = [
        'category'    => 'Category',
        'DBNodeClass' => 'DBNodeClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }

        return $model;
    }
}

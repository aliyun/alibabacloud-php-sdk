<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantComputeEngineRequest;

use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $clusterUrlList;

    /**
     * @description This parameter is required.
     *
     * @example MacCompute
     *
     * @var string
     */
    public $type;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'clusterUrlList' => 'ClusterUrlList',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterUrlList) {
            $res['ClusterUrlList'] = $this->clusterUrlList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterUrlList'])) {
            if (!empty($map['ClusterUrlList'])) {
                $model->clusterUrlList = $map['ClusterUrlList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

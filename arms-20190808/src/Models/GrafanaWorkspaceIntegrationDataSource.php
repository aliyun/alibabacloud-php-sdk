<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceIntegrationDataSource extends Model
{
    /**
     * @var string
     */
    public $clusterType;
    /**
     * @var string
     */
    public $datasourceId;
    /**
     * @var string
     */
    public $datasourceName;
    /**
     * @var string
     */
    public $datasourceUrl;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $exploreUrl;
    /**
     * @var string[]
     */
    public $extra;
    /**
     * @var string
     */
    public $folderUrl;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterType'    => 'clusterType',
        'datasourceId'   => 'datasourceId',
        'datasourceName' => 'datasourceName',
        'datasourceUrl'  => 'datasourceUrl',
        'description'    => 'description',
        'exploreUrl'     => 'exploreUrl',
        'extra'          => 'extra',
        'folderUrl'      => 'folderUrl',
        'regionId'       => 'regionId',
        'status'         => 'status',
        'type'           => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }

        if (null !== $this->datasourceId) {
            $res['datasourceId'] = $this->datasourceId;
        }

        if (null !== $this->datasourceName) {
            $res['datasourceName'] = $this->datasourceName;
        }

        if (null !== $this->datasourceUrl) {
            $res['datasourceUrl'] = $this->datasourceUrl;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->exploreUrl) {
            $res['exploreUrl'] = $this->exploreUrl;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->folderUrl) {
            $res['folderUrl'] = $this->folderUrl;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }

        if (isset($map['datasourceId'])) {
            $model->datasourceId = $map['datasourceId'];
        }

        if (isset($map['datasourceName'])) {
            $model->datasourceName = $map['datasourceName'];
        }

        if (isset($map['datasourceUrl'])) {
            $model->datasourceUrl = $map['datasourceUrl'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['exploreUrl'])) {
            $model->exploreUrl = $map['exploreUrl'];
        }

        if (isset($map['extra'])) {
            if (!empty($map['extra'])) {
                $model->extra = [];
                foreach ($map['extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['folderUrl'])) {
            $model->folderUrl = $map['folderUrl'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

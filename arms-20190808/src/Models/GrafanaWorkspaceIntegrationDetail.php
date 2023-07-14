<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceIntegrationDetail extends Model
{
    /**
     * @var GrafanaWorkspaceIntegrationDataSource[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $integrationId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dataSources'   => 'dataSources',
        'integrationId' => 'integrationId',
        'status'        => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSources) {
            $res['dataSources'] = [];
            if (null !== $this->dataSources && \is_array($this->dataSources)) {
                $n = 0;
                foreach ($this->dataSources as $item) {
                    $res['dataSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->integrationId) {
            $res['integrationId'] = $this->integrationId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceIntegrationDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSources'])) {
            if (!empty($map['dataSources'])) {
                $model->dataSources = [];
                $n                  = 0;
                foreach ($map['dataSources'] as $item) {
                    $model->dataSources[$n++] = null !== $item ? GrafanaWorkspaceIntegrationDataSource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['integrationId'])) {
            $model->integrationId = $map['integrationId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceIntegration extends Model
{
    /**
     * @var int
     */
    public $datasourceAmount;

    /**
     * @var string
     */
    public $integrationId;

    /**
     * @var string
     */
    public $integrationName;

    /**
     * @var GrafanaWorkspaceIntegrationPreview[]
     */
    public $previews;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportRegions;
    protected $_name = [
        'datasourceAmount' => 'datasourceAmount',
        'integrationId'    => 'integrationId',
        'integrationName'  => 'integrationName',
        'previews'         => 'previews',
        'status'           => 'status',
        'supportRegions'   => 'supportRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasourceAmount) {
            $res['datasourceAmount'] = $this->datasourceAmount;
        }
        if (null !== $this->integrationId) {
            $res['integrationId'] = $this->integrationId;
        }
        if (null !== $this->integrationName) {
            $res['integrationName'] = $this->integrationName;
        }
        if (null !== $this->previews) {
            $res['previews'] = [];
            if (null !== $this->previews && \is_array($this->previews)) {
                $n = 0;
                foreach ($this->previews as $item) {
                    $res['previews'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->supportRegions) {
            $res['supportRegions'] = $this->supportRegions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceIntegration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['datasourceAmount'])) {
            $model->datasourceAmount = $map['datasourceAmount'];
        }
        if (isset($map['integrationId'])) {
            $model->integrationId = $map['integrationId'];
        }
        if (isset($map['integrationName'])) {
            $model->integrationName = $map['integrationName'];
        }
        if (isset($map['previews'])) {
            if (!empty($map['previews'])) {
                $model->previews = [];
                $n               = 0;
                foreach ($map['previews'] as $item) {
                    $model->previews[$n++] = null !== $item ? GrafanaWorkspaceIntegrationPreview::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['supportRegions'])) {
            if (!empty($map['supportRegions'])) {
                $model->supportRegions = $map['supportRegions'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20181015\Models;

use AlibabaCloud\Dara\Model;

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
        'dataSources' => 'dataSources',
        'integrationId' => 'integrationId',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['dataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['dataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSources'])) {
            if (!empty($map['dataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['dataSources'] as $item1) {
                    $model->dataSources[$n1] = GrafanaWorkspaceIntegrationDataSource::fromMap($item1);
                    ++$n1;
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

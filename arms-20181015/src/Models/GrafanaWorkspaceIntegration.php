<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20181015\Models;

use AlibabaCloud\Dara\Model;

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
        'integrationId' => 'integrationId',
        'integrationName' => 'integrationName',
        'previews' => 'previews',
        'status' => 'status',
        'supportRegions' => 'supportRegions',
    ];

    public function validate()
    {
        if (\is_array($this->previews)) {
            Model::validateArray($this->previews);
        }
        if (\is_array($this->supportRegions)) {
            Model::validateArray($this->supportRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->previews)) {
                $res['previews'] = [];
                $n1 = 0;
                foreach ($this->previews as $item1) {
                    $res['previews'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->supportRegions) {
            if (\is_array($this->supportRegions)) {
                $res['supportRegions'] = [];
                $n1 = 0;
                foreach ($this->supportRegions as $item1) {
                    $res['supportRegions'][$n1] = $item1;
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
                $n1 = 0;
                foreach ($map['previews'] as $item1) {
                    $model->previews[$n1] = GrafanaWorkspaceIntegrationPreview::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['supportRegions'])) {
            if (!empty($map['supportRegions'])) {
                $model->supportRegions = [];
                $n1 = 0;
                foreach ($map['supportRegions'] as $item1) {
                    $model->supportRegions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

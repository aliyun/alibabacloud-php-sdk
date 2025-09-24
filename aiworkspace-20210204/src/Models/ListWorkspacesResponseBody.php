<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspacesResponseBody\workspaces;

class ListWorkspacesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $resourceLimits;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var workspaces[]
     */
    public $workspaces;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceLimits' => 'ResourceLimits',
        'totalCount' => 'TotalCount',
        'workspaces' => 'Workspaces',
    ];

    public function validate()
    {
        if (\is_array($this->resourceLimits)) {
            Model::validateArray($this->resourceLimits);
        }
        if (\is_array($this->workspaces)) {
            Model::validateArray($this->workspaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceLimits) {
            if (\is_array($this->resourceLimits)) {
                $res['ResourceLimits'] = [];
                foreach ($this->resourceLimits as $key1 => $value1) {
                    $res['ResourceLimits'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->workspaces) {
            if (\is_array($this->workspaces)) {
                $res['Workspaces'] = [];
                $n1 = 0;
                foreach ($this->workspaces as $item1) {
                    $res['Workspaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceLimits'])) {
            if (!empty($map['ResourceLimits'])) {
                $model->resourceLimits = [];
                foreach ($map['ResourceLimits'] as $key1 => $value1) {
                    $model->resourceLimits[$key1] = $value1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Workspaces'])) {
            if (!empty($map['Workspaces'])) {
                $model->workspaces = [];
                $n1 = 0;
                foreach ($map['Workspaces'] as $item1) {
                    $model->workspaces[$n1] = workspaces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

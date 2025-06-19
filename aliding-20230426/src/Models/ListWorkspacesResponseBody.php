<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesResponseBody\workspaces;

class ListWorkspacesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var workspaces[]
     */
    public $workspaces;
    protected $_name = [
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'workspaces' => 'workspaces',
    ];

    public function validate()
    {
        if (\is_array($this->workspaces)) {
            Model::validateArray($this->workspaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->workspaces) {
            if (\is_array($this->workspaces)) {
                $res['workspaces'] = [];
                $n1 = 0;
                foreach ($this->workspaces as $item1) {
                    $res['workspaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['workspaces'])) {
            if (!empty($map['workspaces'])) {
                $model->workspaces = [];
                $n1 = 0;
                foreach ($map['workspaces'] as $item1) {
                    $model->workspaces[$n1] = workspaces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

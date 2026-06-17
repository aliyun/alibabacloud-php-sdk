<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListWorkspacesResponseBody\items\apikeys;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListWorkspacesResponseBody\items\services;

class items extends Model
{
    /**
     * @var apikeys[]
     */
    public $apikeys;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var services[]
     */
    public $services;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'apikeys' => 'Apikeys',
        'createTime' => 'CreateTime',
        'services' => 'Services',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        if (\is_array($this->apikeys)) {
            Model::validateArray($this->apikeys);
        }
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apikeys) {
            if (\is_array($this->apikeys)) {
                $res['Apikeys'] = [];
                $n1 = 0;
                foreach ($this->apikeys as $item1) {
                    $res['Apikeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['Services'] = [];
                $n1 = 0;
                foreach ($this->services as $item1) {
                    $res['Services'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['Apikeys'])) {
            if (!empty($map['Apikeys'])) {
                $model->apikeys = [];
                $n1 = 0;
                foreach ($map['Apikeys'] as $item1) {
                    $model->apikeys[$n1] = apikeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = [];
                $n1 = 0;
                foreach ($map['Services'] as $item1) {
                    $model->services[$n1] = services::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}

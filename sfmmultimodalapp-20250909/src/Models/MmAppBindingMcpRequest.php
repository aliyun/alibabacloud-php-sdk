<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\MmAppBindingMcpRequest\mcps;

class MmAppBindingMcpRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var mcps[]
     */
    public $mcps;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'mcps' => 'Mcps',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->mcps)) {
            Model::validateArray($this->mcps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->mcps) {
            if (\is_array($this->mcps)) {
                $res['Mcps'] = [];
                $n1 = 0;
                foreach ($this->mcps as $item1) {
                    $res['Mcps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Mcps'])) {
            if (!empty($map['Mcps'])) {
                $model->mcps = [];
                $n1 = 0;
                foreach ($map['Mcps'] as $item1) {
                    $model->mcps[$n1] = mcps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

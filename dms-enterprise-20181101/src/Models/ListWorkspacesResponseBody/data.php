<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkspacesResponseBody\data\baseWorkspaces;

class data extends Model
{
    /**
     * @var baseWorkspaces[]
     */
    public $baseWorkspaces;
    protected $_name = [
        'baseWorkspaces' => 'BaseWorkspaces',
    ];

    public function validate()
    {
        if (\is_array($this->baseWorkspaces)) {
            Model::validateArray($this->baseWorkspaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseWorkspaces) {
            if (\is_array($this->baseWorkspaces)) {
                $res['BaseWorkspaces'] = [];
                $n1 = 0;
                foreach ($this->baseWorkspaces as $item1) {
                    $res['BaseWorkspaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BaseWorkspaces'])) {
            if (!empty($map['BaseWorkspaces'])) {
                $model->baseWorkspaces = [];
                $n1 = 0;
                foreach ($map['BaseWorkspaces'] as $item1) {
                    $model->baseWorkspaces[$n1] = baseWorkspaces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

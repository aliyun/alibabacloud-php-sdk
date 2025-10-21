<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateMemoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cmsWorkspaceName;
    protected $_name = [
        'cmsWorkspaceName' => 'cmsWorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmsWorkspaceName) {
            $res['cmsWorkspaceName'] = $this->cmsWorkspaceName;
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
        if (isset($map['cmsWorkspaceName'])) {
            $model->cmsWorkspaceName = $map['cmsWorkspaceName'];
        }

        return $model;
    }
}

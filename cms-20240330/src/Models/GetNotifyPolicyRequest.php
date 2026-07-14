<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetNotifyPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'uuid' => 'uuid',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

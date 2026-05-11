<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;

class GetArtifactRequest extends Model
{
    /**
     * @var string
     */
    public $artifactPath;
    protected $_name = [
        'artifactPath' => 'artifactPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactPath) {
            $res['artifactPath'] = $this->artifactPath;
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
        if (isset($map['artifactPath'])) {
            $model->artifactPath = $map['artifactPath'];
        }

        return $model;
    }
}

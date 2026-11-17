<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeBaseBuildTaskInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class generatedModels extends Model
{
    /**
     * @var string
     */
    public $modelId;

    /**
     * @var int
     */
    public $versionNo;
    protected $_name = [
        'modelId' => 'ModelId',
        'versionNo' => 'VersionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->versionNo) {
            $res['VersionNo'] = $this->versionNo;
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
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['VersionNo'])) {
            $model->versionNo = $map['VersionNo'];
        }

        return $model;
    }
}

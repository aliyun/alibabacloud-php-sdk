<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CopyAppPluginConfigRequest extends Model
{
    /**
     * @var string
     */
    public $sourceBizId;

    /**
     * @var string
     */
    public $targetBizId;
    protected $_name = [
        'sourceBizId' => 'SourceBizId',
        'targetBizId' => 'TargetBizId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceBizId) {
            $res['SourceBizId'] = $this->sourceBizId;
        }

        if (null !== $this->targetBizId) {
            $res['TargetBizId'] = $this->targetBizId;
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
        if (isset($map['SourceBizId'])) {
            $model->sourceBizId = $map['SourceBizId'];
        }

        if (isset($map['TargetBizId'])) {
            $model->targetBizId = $map['TargetBizId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetSnapshotResponseBody\snapshot;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $stageCode;
    protected $_name = [
        'content' => 'Content',
        'spec' => 'Spec',
        'stageCode' => 'StageCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->stageCode) {
            $res['StageCode'] = $this->stageCode;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['StageCode'])) {
            $model->stageCode = $map['StageCode'];
        }

        return $model;
    }
}

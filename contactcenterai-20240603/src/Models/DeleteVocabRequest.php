<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;

class DeleteVocabRequest extends Model
{
    /**
     * @var string
     */
    public $vocabularyId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'vocabularyId' => 'vocabularyId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vocabularyId) {
            $res['vocabularyId'] = $this->vocabularyId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['vocabularyId'])) {
            $model->vocabularyId = $map['vocabularyId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}

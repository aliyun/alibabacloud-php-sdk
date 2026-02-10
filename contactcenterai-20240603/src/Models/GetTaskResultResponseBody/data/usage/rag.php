<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody\data\usage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody\data\usage\rag\adaptive;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody\data\usage\rag\dialogSummary;

class rag extends Model
{
    /**
     * @var adaptive
     */
    public $adaptive;

    /**
     * @var dialogSummary
     */
    public $dialogSummary;
    protected $_name = [
        'adaptive' => 'adaptive',
        'dialogSummary' => 'dialogSummary',
    ];

    public function validate()
    {
        if (null !== $this->adaptive) {
            $this->adaptive->validate();
        }
        if (null !== $this->dialogSummary) {
            $this->dialogSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptive) {
            $res['adaptive'] = null !== $this->adaptive ? $this->adaptive->toArray($noStream) : $this->adaptive;
        }

        if (null !== $this->dialogSummary) {
            $res['dialogSummary'] = null !== $this->dialogSummary ? $this->dialogSummary->toArray($noStream) : $this->dialogSummary;
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
        if (isset($map['adaptive'])) {
            $model->adaptive = adaptive::fromMap($map['adaptive']);
        }

        if (isset($map['dialogSummary'])) {
            $model->dialogSummary = dialogSummary::fromMap($map['dialogSummary']);
        }

        return $model;
    }
}

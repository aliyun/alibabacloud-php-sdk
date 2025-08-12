<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView;

use AlibabaCloud\Dara\Model;

class customTemplateEntries extends Model
{
    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $templateUuid;
    protected $_name = [
        'targetType' => 'targetType',
        'templateUuid' => 'templateUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        if (null !== $this->templateUuid) {
            $res['templateUuid'] = $this->templateUuid;
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
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        if (isset($map['templateUuid'])) {
            $model->templateUuid = $map['templateUuid'];
        }

        return $model;
    }
}

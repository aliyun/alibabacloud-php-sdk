<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView;

use AlibabaCloud\Tea\Model;

class customTemplateEntries extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $targetType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $templateUuid;
    protected $_name = [
        'targetType'   => 'targetType',
        'templateUuid' => 'templateUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return customTemplateEntries
     */
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

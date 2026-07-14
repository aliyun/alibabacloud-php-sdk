<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyDetail;

use AlibabaCloud\Dara\Model;

class customTemplateEntries extends Model
{
    /**
     * @var string
     */
    public $templateUuid;
    protected $_name = [
        'templateUuid' => 'templateUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['templateUuid'])) {
            $model->templateUuid = $map['templateUuid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class TriggerPlaybookRequest extends Model
{
    /**
     * @var string
     */
    public $inputParam;

    /**
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'inputParam' => 'InputParam',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputParam) {
            $res['InputParam'] = $this->inputParam;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
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
        if (isset($map['InputParam'])) {
            $model->inputParam = $map['InputParam'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}

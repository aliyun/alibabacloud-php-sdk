<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class GetTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'regionId' => 'regionId',
        'templateType' => 'templateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }

        return $model;
    }
}

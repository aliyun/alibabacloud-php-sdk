<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class DeleteJobTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $jobTemplateId;
    protected $_name = [
        'jobTemplateId' => 'JobTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobTemplateId) {
            $res['JobTemplateId'] = $this->jobTemplateId;
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
        if (isset($map['JobTemplateId'])) {
            $model->jobTemplateId = $map['JobTemplateId'];
        }

        return $model;
    }
}

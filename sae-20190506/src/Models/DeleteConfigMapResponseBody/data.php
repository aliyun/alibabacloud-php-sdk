<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DeleteConfigMapResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $configMapId;
    protected $_name = [
        'configMapId' => 'ConfigMapId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configMapId) {
            $res['ConfigMapId'] = $this->configMapId;
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
        if (isset($map['ConfigMapId'])) {
            $model->configMapId = $map['ConfigMapId'];
        }

        return $model;
    }
}

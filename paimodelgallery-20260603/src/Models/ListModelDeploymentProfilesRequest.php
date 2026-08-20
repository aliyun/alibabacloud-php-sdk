<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models;

use AlibabaCloud\Dara\Model;

class ListModelDeploymentProfilesRequest extends Model
{
    /**
     * @var string
     */
    public $bizKey;

    /**
     * @var string
     */
    public $modelVersion;
    protected $_name = [
        'bizKey' => 'BizKey',
        'modelVersion' => 'ModelVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizKey) {
            $res['BizKey'] = $this->bizKey;
        }

        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
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
        if (isset($map['BizKey'])) {
            $model->bizKey = $map['BizKey'];
        }

        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        return $model;
    }
}

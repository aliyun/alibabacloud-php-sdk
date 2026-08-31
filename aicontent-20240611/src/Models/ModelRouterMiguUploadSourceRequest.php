<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterMiguUploadSourceRequest extends Model
{
    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'fileType' => 'fileType',
        'serviceName' => 'serviceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}

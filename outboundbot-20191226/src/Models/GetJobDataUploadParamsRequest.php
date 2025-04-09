<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class GetJobDataUploadParamsRequest extends Model
{
    /**
     * @var string
     */
    public $busiType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'busiType' => 'BusiType',
        'fileName' => 'FileName',
        'instanceId' => 'InstanceId',
        'path' => 'Path',
        'uniqueId' => 'UniqueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->busiType) {
            $res['BusiType'] = $this->busiType;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
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
        if (isset($map['BusiType'])) {
            $model->busiType = $map['BusiType'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}

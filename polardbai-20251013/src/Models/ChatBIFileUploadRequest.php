<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIFileUploadRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'fileName' => 'FileName',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}

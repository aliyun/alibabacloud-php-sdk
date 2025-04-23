<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class GetResourceExportTaskRequest extends Model
{
    /**
     * @var string
     */
    public $exportVersion;
    protected $_name = [
        'exportVersion' => 'exportVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportVersion) {
            $res['exportVersion'] = $this->exportVersion;
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
        if (isset($map['exportVersion'])) {
            $model->exportVersion = $map['exportVersion'];
        }

        return $model;
    }
}

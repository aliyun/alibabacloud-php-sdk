<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody\result\ossObject;

class result extends Model
{
    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var ossObject
     */
    public $ossObject;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fileSize' => 'fileSize',
        'ossObject' => 'ossObject',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->ossObject) {
            $this->ossObject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->ossObject) {
            $res['ossObject'] = null !== $this->ossObject ? $this->ossObject->toArray($noStream) : $this->ossObject;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['ossObject'])) {
            $model->ossObject = ossObject::fromMap($map['ossObject']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

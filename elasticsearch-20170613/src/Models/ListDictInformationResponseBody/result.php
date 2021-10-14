<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody\result\ossObject;
use AlibabaCloud\Tea\Model;

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
        'fileSize'  => 'fileSize',
        'ossObject' => 'ossObject',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }
        if (null !== $this->ossObject) {
            $res['ossObject'] = null !== $this->ossObject ? $this->ossObject->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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

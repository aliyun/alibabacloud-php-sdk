<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody\result\ossObject;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var ossObject
     */
    public $ossObject;
    protected $_name = [
        'type'      => 'type',
        'fileSize'  => 'fileSize',
        'ossObject' => 'ossObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }
        if (null !== $this->ossObject) {
            $res['ossObject'] = null !== $this->ossObject ? $this->ossObject->toMap() : null;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }
        if (isset($map['ossObject'])) {
            $model->ossObject = ossObject::fromMap($map['ossObject']);
        }

        return $model;
    }
}

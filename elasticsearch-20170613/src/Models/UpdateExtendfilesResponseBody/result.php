<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateExtendfilesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1853083
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example mysql-connector-java-6.0.2.jar
     *
     * @var string
     */
    public $name;

    /**
     * @example ORIGIN
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'fileSize'   => 'fileSize',
        'name'       => 'name',
        'sourceType' => 'sourceType',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}

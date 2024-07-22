<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListExtendfilesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The path of the driver file.
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The size of the driver file.
     *
     * @example 968668
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The name of the driver file.
     *
     * @example mysql-connector-java-5.1.35.jar
     *
     * @var string
     */
    public $name;

    /**
     * @description The source type.
     *
     * @example ORIGIN
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'filePath'   => 'filePath',
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
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
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
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result;

use AlibabaCloud\Tea\Model;

class dictList extends Model
{
    /**
     * @description The size of the dictionary file. Unit: bytes.
     *
     * @example 2782602
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The name of the dictionary file.
     *
     * @example SYSTEM_MAIN.dic
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the source of the dictionary file. Valid values:
     *
     *   OSS: Object Storage Service (OSS). You must make sure that the access control list (ACL) of the related OSS bucket is public read.
     *   ORIGIN: previously uploaded dictionary.
     *
     * @example ORIGIN
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The type of the dictionary. Valid values:
     *
     *   STOP: stopword list
     *   MAIN: main dictionary
     *   SYNONYMS: synonym dictionary
     *   ALI_WS: Alibaba Cloud dictionary
     *
     * @example MAIN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fileSize'   => 'fileSize',
        'name'       => 'name',
        'sourceType' => 'sourceType',
        'type'       => 'type',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dictList
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

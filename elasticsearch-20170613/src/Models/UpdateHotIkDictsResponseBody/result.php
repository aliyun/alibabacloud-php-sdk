<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateHotIkDictsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The size of the dictionary file. Unit: bytes.
     *
     * @example 6
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The name of the dictionary file.
     *
     * @example deploy_0.dic
     *
     * @var string
     */
    public $name;

    /**
     * @description The source type of the dictionary file. Valid values:
     *
     *   OSS
     *   ORIGIN
     *
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The type of the dictionaries. Valid values:
     *
     *   MAIN: IK main dictionary
     *   STOP: IK stopword list
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

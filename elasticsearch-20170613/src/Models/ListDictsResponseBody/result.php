<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The link that is used to download the dictionary over the Internet. The link is valid for 90s.
     *
     * @example http://test_bucket.oss-cn-hangzhou.aliyuncs.com/AliyunEs/test.dic?Expires=162573****&OSSAccessKeyId=LTAI*****V9&Signature=PNPO********BBGsJDO4V3VfU4sE%3D
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The size of the dictionary file. Unit: byte.
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
     * @description The source type.
     *
     * @example ORIGIN
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The type of the IK dictionary. Valid values:
     *
     *   MAIN: main dictionary
     *   STOP: stopword list
     *
     * @example MAIN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'downloadUrl' => 'downloadUrl',
        'fileSize'    => 'fileSize',
        'name'        => 'name',
        'sourceType'  => 'sourceType',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['downloadUrl'] = $this->downloadUrl;
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
        if (isset($map['downloadUrl'])) {
            $model->downloadUrl = $map['downloadUrl'];
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

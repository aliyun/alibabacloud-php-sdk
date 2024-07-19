<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\ListDictsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example http://es-serverless-****.oss-cn-hangzhou.aliyuncs.com/app/es7**190/0/config/analysis-ik/stopword.dic?Expires=1705923089&OSSAccessKeyId=STS.NV18q****UkVp6LNj&Signat
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @example a.dic
     *
     * @var string
     */
    public $name;

    /**
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example MAIN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'downloadUrl' => 'downloadUrl',
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

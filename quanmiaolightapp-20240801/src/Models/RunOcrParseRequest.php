<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunOcrParseRequest extends Model
{
    /**
     * @example oss://default/aimiaobi-service-prod/aimiaobi/temp/public/government_service_experience_feedback_summary.txt
     *
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @example http://www.example.com/xxxx.txt
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'fileKey' => 'fileKey',
        'modelId' => 'modelId',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['fileKey'] = $this->fileKey;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunOcrParseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileKey'])) {
            $model->fileKey = $map['fileKey'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

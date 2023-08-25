<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SubmitSparkLogAnalyzeTaskRequest extends Model
{
    /**
     * @description The ID of the Spark application.
     *
     * @example s202301121553hzd9c6f7xxxx
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'appId' => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSparkLogAnalyzeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}

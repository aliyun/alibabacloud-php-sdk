<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody;

use AlibabaCloud\Tea\Model;

class jobResult extends Model
{
    /**
     * @description 智能分析结果
     *
     * @example 拆条或智能标签信息
     *
     * @var string
     */
    public $aiResult;

    /**
     * @description 媒资Id
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'aiResult' => 'AiResult',
        'mediaId'  => 'MediaId',
        'usage'    => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiResult) {
            $res['AiResult'] = $this->aiResult;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiResult'])) {
            $model->aiResult = $map['AiResult'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}

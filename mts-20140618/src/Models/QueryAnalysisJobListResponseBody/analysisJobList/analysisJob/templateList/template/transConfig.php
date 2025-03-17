<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\templateList\template;

use AlibabaCloud\Tea\Model;

class transConfig extends Model
{
    /**
     * @description The transcoding mode. Default value: **onepass**. Valid values:
     *
     *   **onepass**
     *   **twopass**
     *   **CBR**
     *
     * @example onepass
     *
     * @var string
     */
    public $transMode;
    protected $_name = [
        'transMode' => 'TransMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->transMode) {
            $res['TransMode'] = $this->transMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransMode'])) {
            $model->transMode = $map['TransMode'];
        }

        return $model;
    }
}

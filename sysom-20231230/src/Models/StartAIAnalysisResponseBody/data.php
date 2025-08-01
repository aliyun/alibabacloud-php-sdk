<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIAnalysisResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 16896fa8-37f6-4c70-bb32-67fa9817d426
     *
     * @var string
     */
    public $analysisId;
    protected $_name = [
        'analysisId' => 'analysis_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisId) {
            $res['analysis_id'] = $this->analysisId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysis_id'])) {
            $model->analysisId = $map['analysis_id'];
        }

        return $model;
    }
}

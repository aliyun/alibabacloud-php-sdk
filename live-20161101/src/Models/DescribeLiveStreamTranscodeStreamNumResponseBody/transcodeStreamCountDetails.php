<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeStreamNumResponseBody;

use AlibabaCloud\Tea\Model;

class transcodeStreamCountDetails extends Model
{
    /**
     * @description The number of streams that use the transcoding template.
     *
     * @example 30
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the transcoding template.
     *
     * @example template_name
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'count' => 'Count',
        'template' => 'Template',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeStreamCountDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}

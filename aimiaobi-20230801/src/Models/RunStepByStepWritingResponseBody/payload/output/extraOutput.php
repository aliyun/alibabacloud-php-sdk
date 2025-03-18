<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingResponseBody\payload\output;

use AlibabaCloud\Tea\Model;

class extraOutput extends Model
{
    /**
     * @var string[]
     */
    public $summarization;
    protected $_name = [
        'summarization' => 'summarization',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->summarization) {
            $res['summarization'] = $this->summarization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['summarization'])) {
            if (!empty($map['summarization'])) {
                $model->summarization = $map['summarization'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunBookIntroductionResponseBody\payload;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $keyPoint;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'keyPoint' => 'KeyPoint',
        'summary' => 'Summary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPoint) {
            $res['KeyPoint'] = $this->keyPoint;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPoint'])) {
            $model->keyPoint = $map['KeyPoint'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionResponseBody\payload;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionResponseBody\payload\output\keyPoints;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var keyPoints[]
     */
    public $keyPoints;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'keyPoints' => 'KeyPoints',
        'summary' => 'Summary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPoints) {
            $res['KeyPoints'] = [];
            if (null !== $this->keyPoints && \is_array($this->keyPoints)) {
                $n = 0;
                foreach ($this->keyPoints as $item) {
                    $res['KeyPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['KeyPoints'])) {
            if (!empty($map['KeyPoints'])) {
                $model->keyPoints = [];
                $n = 0;
                foreach ($map['KeyPoints'] as $item) {
                    $model->keyPoints[$n++] = null !== $item ? keyPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionResponseBody\payload\output\keyPoints;

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
        'summary'   => 'Summary',
    ];

    public function validate()
    {
        if (\is_array($this->keyPoints)) {
            Model::validateArray($this->keyPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPoints) {
            if (\is_array($this->keyPoints)) {
                $res['KeyPoints'] = [];
                $n1               = 0;
                foreach ($this->keyPoints as $item1) {
                    $res['KeyPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPoints'])) {
            if (!empty($map['KeyPoints'])) {
                $model->keyPoints = [];
                $n1               = 0;
                foreach ($map['KeyPoints'] as $item1) {
                    $model->keyPoints[$n1++] = keyPoints::fromMap($item1);
                }
            }
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}

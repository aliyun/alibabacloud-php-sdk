<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponseBody\payload\output\introductions;

class output extends Model
{
    /**
     * @var introductions[]
     */
    public $introductions;
    /**
     * @var string
     */
    public $keyPoint;
    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'introductions' => 'Introductions',
        'keyPoint'      => 'KeyPoint',
        'summary'       => 'Summary',
    ];

    public function validate()
    {
        if (\is_array($this->introductions)) {
            Model::validateArray($this->introductions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->introductions) {
            if (\is_array($this->introductions)) {
                $res['Introductions'] = [];
                $n1                   = 0;
                foreach ($this->introductions as $item1) {
                    $res['Introductions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->keyPoint) {
            $res['KeyPoint'] = $this->keyPoint;
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
        if (isset($map['Introductions'])) {
            if (!empty($map['Introductions'])) {
                $model->introductions = [];
                $n1                   = 0;
                foreach ($map['Introductions'] as $item1) {
                    $model->introductions[$n1++] = introductions::fromMap($item1);
                }
            }
        }

        if (isset($map['KeyPoint'])) {
            $model->keyPoint = $map['KeyPoint'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}

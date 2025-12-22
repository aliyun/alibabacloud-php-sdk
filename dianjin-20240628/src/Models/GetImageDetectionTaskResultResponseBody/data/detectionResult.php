<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultResponseBody\data\detectionResult\detectionDetails;

class detectionResult extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var detectionDetails[]
     */
    public $detectionDetails;

    /**
     * @var string
     */
    public $portraitType;

    /**
     * @var string[]
     */
    public $suggestions;
    protected $_name = [
        'description' => 'description',
        'detectionDetails' => 'detectionDetails',
        'portraitType' => 'portraitType',
        'suggestions' => 'suggestions',
    ];

    public function validate()
    {
        if (\is_array($this->detectionDetails)) {
            Model::validateArray($this->detectionDetails);
        }
        if (\is_array($this->suggestions)) {
            Model::validateArray($this->suggestions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->detectionDetails) {
            if (\is_array($this->detectionDetails)) {
                $res['detectionDetails'] = [];
                $n1 = 0;
                foreach ($this->detectionDetails as $item1) {
                    $res['detectionDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->portraitType) {
            $res['portraitType'] = $this->portraitType;
        }

        if (null !== $this->suggestions) {
            if (\is_array($this->suggestions)) {
                $res['suggestions'] = [];
                $n1 = 0;
                foreach ($this->suggestions as $item1) {
                    $res['suggestions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['detectionDetails'])) {
            if (!empty($map['detectionDetails'])) {
                $model->detectionDetails = [];
                $n1 = 0;
                foreach ($map['detectionDetails'] as $item1) {
                    $model->detectionDetails[$n1] = detectionDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['portraitType'])) {
            $model->portraitType = $map['portraitType'];
        }

        if (isset($map['suggestions'])) {
            if (!empty($map['suggestions'])) {
                $model->suggestions = [];
                $n1 = 0;
                foreach ($map['suggestions'] as $item1) {
                    $model->suggestions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

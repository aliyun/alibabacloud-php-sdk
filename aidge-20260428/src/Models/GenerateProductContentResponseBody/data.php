<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\GenerateProductContentResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $outputLanguage;

    /**
     * @var int[]
     */
    public $pointLengths;

    /**
     * @var string[]
     */
    public $points;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'contentType' => 'ContentType',
        'length' => 'Length',
        'outputLanguage' => 'OutputLanguage',
        'pointLengths' => 'PointLengths',
        'points' => 'Points',
        'text' => 'Text',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (\is_array($this->pointLengths)) {
            Model::validateArray($this->pointLengths);
        }
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->outputLanguage) {
            $res['OutputLanguage'] = $this->outputLanguage;
        }

        if (null !== $this->pointLengths) {
            if (\is_array($this->pointLengths)) {
                $res['PointLengths'] = [];
                $n1 = 0;
                foreach ($this->pointLengths as $item1) {
                    $res['PointLengths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->points) {
            if (\is_array($this->points)) {
                $res['Points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['Points'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['OutputLanguage'])) {
            $model->outputLanguage = $map['OutputLanguage'];
        }

        if (isset($map['PointLengths'])) {
            if (!empty($map['PointLengths'])) {
                $model->pointLengths = [];
                $n1 = 0;
                foreach ($map['PointLengths'] as $item1) {
                    $model->pointLengths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['Points'] as $item1) {
                    $model->points[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

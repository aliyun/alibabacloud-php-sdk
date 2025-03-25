<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSkinDiseaseResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bodyPart;

    /**
     * @var float
     */
    public $imageQuality;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var mixed[]
     */
    public $results;

    /**
     * @var mixed[]
     */
    public $resultsEnglish;
    protected $_name = [
        'bodyPart' => 'BodyPart',
        'imageQuality' => 'ImageQuality',
        'imageType' => 'ImageType',
        'results' => 'Results',
        'resultsEnglish' => 'ResultsEnglish',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        if (\is_array($this->resultsEnglish)) {
            Model::validateArray($this->resultsEnglish);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyPart) {
            $res['BodyPart'] = $this->bodyPart;
        }

        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = $this->imageQuality;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['Results'] = [];
                foreach ($this->results as $key1 => $value1) {
                    $res['Results'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resultsEnglish) {
            if (\is_array($this->resultsEnglish)) {
                $res['ResultsEnglish'] = [];
                foreach ($this->resultsEnglish as $key1 => $value1) {
                    $res['ResultsEnglish'][$key1] = $value1;
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
        if (isset($map['BodyPart'])) {
            $model->bodyPart = $map['BodyPart'];
        }

        if (isset($map['ImageQuality'])) {
            $model->imageQuality = $map['ImageQuality'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                foreach ($map['Results'] as $key1 => $value1) {
                    $model->results[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResultsEnglish'])) {
            if (!empty($map['ResultsEnglish'])) {
                $model->resultsEnglish = [];
                foreach ($map['ResultsEnglish'] as $key1 => $value1) {
                    $model->resultsEnglish[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

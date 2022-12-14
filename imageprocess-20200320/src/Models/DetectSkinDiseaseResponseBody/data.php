<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSkinDiseaseResponseBody;

use AlibabaCloud\Tea\Model;

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
        'bodyPart'       => 'BodyPart',
        'imageQuality'   => 'ImageQuality',
        'imageType'      => 'ImageType',
        'results'        => 'Results',
        'resultsEnglish' => 'ResultsEnglish',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Results'] = $this->results;
        }
        if (null !== $this->resultsEnglish) {
            $res['ResultsEnglish'] = $this->resultsEnglish;
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
            $model->results = $map['Results'];
        }
        if (isset($map['ResultsEnglish'])) {
            $model->resultsEnglish = $map['ResultsEnglish'];
        }

        return $model;
    }
}

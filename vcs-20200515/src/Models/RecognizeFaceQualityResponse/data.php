<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeFaceQualityResponse;

use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeFaceQualityResponse\data\attributes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $qualityScore;

    /**
     * @var string
     */
    public $description;

    /**
     * @var attributes
     */
    public $attributes;
    protected $_name = [
        'qualityScore' => 'QualityScore',
        'description'  => 'Description',
        'attributes'   => 'Attributes',
    ];

    public function validate()
    {
        Model::validateRequired('qualityScore', $this->qualityScore, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('attributes', $this->attributes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = null !== $this->attributes ? $this->attributes->toMap() : null;
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
        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = attributes::fromMap($map['Attributes']);
        }

        return $model;
    }
}

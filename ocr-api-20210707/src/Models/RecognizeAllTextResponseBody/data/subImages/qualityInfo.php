<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Tea\Model;

class qualityInfo extends Model
{
    /**
     * @var float
     */
    public $completenessScore;

    /**
     * @var bool
     */
    public $isCopy;

    /**
     * @var bool
     */
    public $isReshoot;

    /**
     * @var float
     */
    public $qualityScore;

    /**
     * @var float
     */
    public $tamperScore;
    protected $_name = [
        'completenessScore' => 'CompletenessScore',
        'isCopy'            => 'IsCopy',
        'isReshoot'         => 'IsReshoot',
        'qualityScore'      => 'QualityScore',
        'tamperScore'       => 'TamperScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completenessScore) {
            $res['CompletenessScore'] = $this->completenessScore;
        }
        if (null !== $this->isCopy) {
            $res['IsCopy'] = $this->isCopy;
        }
        if (null !== $this->isReshoot) {
            $res['IsReshoot'] = $this->isReshoot;
        }
        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }
        if (null !== $this->tamperScore) {
            $res['TamperScore'] = $this->tamperScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletenessScore'])) {
            $model->completenessScore = $map['CompletenessScore'];
        }
        if (isset($map['IsCopy'])) {
            $model->isCopy = $map['IsCopy'];
        }
        if (isset($map['IsReshoot'])) {
            $model->isReshoot = $map['IsReshoot'];
        }
        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }
        if (isset($map['TamperScore'])) {
            $model->tamperScore = $map['TamperScore'];
        }

        return $model;
    }
}

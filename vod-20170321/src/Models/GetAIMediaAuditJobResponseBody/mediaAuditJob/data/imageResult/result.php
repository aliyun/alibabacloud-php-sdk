<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\imageResult;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The category of the review result.
     *
     * Valid values if scene is **porn**:
     *
     *   **porn**
     *   **sexy**
     *   **normal**
     *
     * Valid values if scene is **terrorism**:
     *
     *   **normal**
     *   **bloody**
     *   **explosion**
     *   **outfit**
     *   **logo**
     *   **weapon**
     *   **politics**
     *   **violence**
     *   **crowd**
     *   **parade**
     *   **carcrash**
     *   **flag**
     *   **location**
     *   **others**
     *
     * Valid values if scene is **ad**:
     *
     *   **normal**: normal content
     *   **ad**: ads
     *   **politics**: political content
     *   **porn**: pornographic content
     *   **abuse**: verbal abuse
     *   **terrorism**: terrorist content
     *   **contraband**: prohibited content
     *   **spam**: spam content
     *   **npx**: illegal ad
     *   **qrcode**: QR code
     *   **programCode**: mini program code
     *
     * Valid values if scene is **live**:
     *
     *   **normal**: normal content
     *   **meaningless**: meaningless content, such as a black or white screen.
     *   **PIP**: picture-in-picture
     *   **smoking**: smoking
     *   **drivelive**: live broadcasting in a running vehicle
     *
     * Valid values if scene is **logo**:
     *
     *   **normal**: normal content
     *   **TV**: controlled TV station logo
     *   **trademark**: trademark
     *
     * @example porn
     *
     * @var string
     */
    public $label;

    /**
     * @description The review scenario. Valid values:
     *
     *   **porn**: pornographic content
     *   **terrorism**: terrorist or politically sensitive content
     *   **ad**: ad violation
     *   **live**: undesirable scene
     *   **logo**: logo
     *
     * @example porn
     *
     * @var string
     */
    public $scene;

    /**
     * @description The score of the image of the category that is indicated by Label. Valid values: `[0, 100]`. The score is representative of the confidence.
     *
     * @example 0
     *
     * @var string
     */
    public $score;

    /**
     * @description The recommendation for review results. Valid values:
     *
     *   **block**
     *   **review**
     *   **pass**
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label' => 'Label',
        'scene' => 'Scene',
        'score' => 'Score',
        'suggestion' => 'Suggestion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}

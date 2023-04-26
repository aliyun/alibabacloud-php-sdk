<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data;

use AlibabaCloud\Tea\Model;

class textResult extends Model
{
    /**
     * @description The number of images.
     *
     * @example http://temp-****bucket.oss-cn-shanghai.aliyuncs.com/aivideocensor/****.jpg
     *
     * @var string
     */
    public $content;

    /**
     * @description The recommendation for review results. Valid values:
     *
     *   **block**: The content violates the regulations.
     *   **review**: The content may violate the regulations.
     *   **pass**: The content passes the review.
     *
     * @example ad
     *
     * @var string
     */
    public $label;

    /**
     * @description The categories of the review results and the number of images.
     *
     * @example antispam
     *
     * @var string
     */
    public $scene;

    /**
     * @description The URL of the image.
     *
     * @example 100
     *
     * @var string
     */
    public $score;

    /**
     * @description The information about the intelligent review job.
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;

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
     *   **normal**
     *   **ad**
     *   **politics**
     *   **porn**
     *   **abuse**
     *   **terrorism**
     *   **contraband**
     *   **spam**
     *   **npx**: illegal ad
     *   **qrcode**: QR code
     *   **programCode**
     *
     * Valid values if scene is **live**:
     *
     *   **normal**
     *   **meaningless**
     *   **PIP**
     *   **smoking**
     *   **drivelive**
     *
     * Valid values if scene is **logo**:
     *
     *   **normal**
     *   **TV**
     *   **trademark**
     *
     * @example title
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content'    => 'Content',
        'label'      => 'Label',
        'scene'      => 'Scene',
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

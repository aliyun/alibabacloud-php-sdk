<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\adResult;

use AlibabaCloud\Tea\Model;

class topList extends Model
{
    /**
     * @description The categories of the ad review results. Valid values:
     *
     *   **normal**: normal content
     *   **ad**: other ads
     *   **politics**: political content
     *   **porn**: pornographic content
     *   **abuse**: abuse
     *   **terrorism**: terrorist content
     *   **contraband**: prohibited content
     *   **spam**: spam content
     *   **npx**: illegal ad
     *   **qrcode**: QR code
     *   **programCode**: mini program code
     *
     * @example ad
     *
     * @var string
     */
    public $label;

    /**
     * @description The score of the snapshot in the category that is indicated by Label.
     *
     * @example 100
     *
     * @var string
     */
    public $score;

    /**
     * @description The timestamp of the snapshot in the video. Unit: milliseconds.
     *
     * @example 500
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The URL of the video snapshot.
     *
     * @example http://temp-****bucket.oss-cn-shanghai.aliyuncs.com/aivideocensor/****.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'label' => 'Label',
        'score' => 'Score',
        'timestamp' => 'Timestamp',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponseBody\mediaAuditResultDetail;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The category of the ad review result. Valid values:
     *
     *   **normal**: normal content
     *   **ad**: ad or text violation
     *
     * @example normal
     *
     * @var string
     */
    public $adLabel;

    /**
     * @description The score of the review result category. It is representative of the confidence. Valid values: `[0.00-100.00].` The value is rounded down to 10 decimal places.
     *
     * @example 100
     *
     * @var string
     */
    public $adScore;

    /**
     * @description The category of the undesirable scene review result. Valid values:
     *
     *   **normal**: The video does not contain undesirable scenes.
     *   **live**: The video contains undesirable scenes.
     *
     * @example normal
     *
     * @var string
     */
    public $liveLabel;

    /**
     * @description The score of the review result category. It is representative of the confidence. Valid values: `[0.00-100.00].` The value is rounded down to 10 decimal places.
     *
     * @example 100
     *
     * @var string
     */
    public $liveScore;

    /**
     * @description The category of the logo review result. Valid values:
     *
     *   **normal**
     *   **tlogo**
     *
     * @example normal
     *
     * @var string
     */
    public $logoLabel;

    /**
     * @description The score of the review result category. It is representative of the confidence. Valid values: `[0.00-100.00].` The value is rounded down to 10 decimal places.
     *
     * @example 100
     *
     * @var string
     */
    public $logoScore;

    /**
     * @description The category of the pornographic content review result. Valid values:
     *
     *   **normal**
     *   **porn**
     *   **sexy**
     *
     * @example normal
     *
     * @var string
     */
    public $pornLabel;

    /**
     * @description The score of the review result category. It is representative of the confidence. Valid values: `[0.00-100.00].` The value is rounded down to 10 decimal places.
     *
     * @example 100.00
     *
     * @var string
     */
    public $pornScore;

    /**
     * @description The category of the terrorist content review result.
     *
     *   **normal**: normal
     *   **terrorism**: terrorist content
     *   **outfit**: special costume
     *   **logo**: special logo
     *   **weapon**: weapon
     *   **politics**: politically sensitive content
     *   **others**: other terrorist content and politically sensitive content
     *
     * @example normal
     *
     * @var string
     */
    public $terrorismLabel;

    /**
     * @description The score of the review result category. It is representative of the confidence. Valid values: `[0.00-100.00].` The value is rounded down to 10 decimal places.
     *
     * @example 100.00
     *
     * @var string
     */
    public $terrorismScore;

    /**
     * @description The position in the video. Unit: milliseconds.
     *
     * @example 3005
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The URL of the image.
     *
     * @example http://temp-testbucket.oss-cn-shanghai.aliyuncs.com/aivideocensor/****.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'adLabel'        => 'AdLabel',
        'adScore'        => 'AdScore',
        'liveLabel'      => 'LiveLabel',
        'liveScore'      => 'LiveScore',
        'logoLabel'      => 'LogoLabel',
        'logoScore'      => 'LogoScore',
        'pornLabel'      => 'PornLabel',
        'pornScore'      => 'PornScore',
        'terrorismLabel' => 'TerrorismLabel',
        'terrorismScore' => 'TerrorismScore',
        'timestamp'      => 'Timestamp',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adLabel) {
            $res['AdLabel'] = $this->adLabel;
        }
        if (null !== $this->adScore) {
            $res['AdScore'] = $this->adScore;
        }
        if (null !== $this->liveLabel) {
            $res['LiveLabel'] = $this->liveLabel;
        }
        if (null !== $this->liveScore) {
            $res['LiveScore'] = $this->liveScore;
        }
        if (null !== $this->logoLabel) {
            $res['LogoLabel'] = $this->logoLabel;
        }
        if (null !== $this->logoScore) {
            $res['LogoScore'] = $this->logoScore;
        }
        if (null !== $this->pornLabel) {
            $res['PornLabel'] = $this->pornLabel;
        }
        if (null !== $this->pornScore) {
            $res['PornScore'] = $this->pornScore;
        }
        if (null !== $this->terrorismLabel) {
            $res['TerrorismLabel'] = $this->terrorismLabel;
        }
        if (null !== $this->terrorismScore) {
            $res['TerrorismScore'] = $this->terrorismScore;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdLabel'])) {
            $model->adLabel = $map['AdLabel'];
        }
        if (isset($map['AdScore'])) {
            $model->adScore = $map['AdScore'];
        }
        if (isset($map['LiveLabel'])) {
            $model->liveLabel = $map['LiveLabel'];
        }
        if (isset($map['LiveScore'])) {
            $model->liveScore = $map['LiveScore'];
        }
        if (isset($map['LogoLabel'])) {
            $model->logoLabel = $map['LogoLabel'];
        }
        if (isset($map['LogoScore'])) {
            $model->logoScore = $map['LogoScore'];
        }
        if (isset($map['PornLabel'])) {
            $model->pornLabel = $map['PornLabel'];
        }
        if (isset($map['PornScore'])) {
            $model->pornScore = $map['PornScore'];
        }
        if (isset($map['TerrorismLabel'])) {
            $model->terrorismLabel = $map['TerrorismLabel'];
        }
        if (isset($map['TerrorismScore'])) {
            $model->terrorismScore = $map['TerrorismScore'];
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

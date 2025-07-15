<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveAIProduceRulesRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. The name can be up to 256 characters in length and can contain digits, letters, hyphens (-), and underscores (_). The name must be the same as the application name in the ingest URL. Otherwise, the rule does not take effect.
     *
     * This parameter is required.
     *
     * @example AppName
     *
     * @var string
     */
    public $app;

    /**
     * @description The description of the subtitle rule. The description can be up to 128 characters in length and can contain letters, digits, and special characters.
     *
     * @example live AI subtitle template
     *
     * @var string
     */
    public $description;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Specifies whether to trigger the subtitle rule when stream pulling starts. Valid values:
     *
     *   true: generates live subtitles when stream pulling starts and stops generating live subtitles when no stream is pulled for 5 minutes. When stream pulling restarts, live subtitles are generated again.
     *   false: generates live subtitles when stream ingest starts, regardless of whether stream pulling starts.
     *
     * @example true
     *
     * @var bool
     */
    public $isLazy;

    /**
     * @description The specification of the output subtitles. Valid values:
     *
     *   `lp_ld`: landscape low definition 360p (640×360)
     *   `lp_ld_v`: portrait low definition 360p (360×640)
     *   `lp_sd`: landscape standard definition 480p (854×480)
     *   `lp_sd_v`: portrait standard definition 480p (480×854)
     *   `lp_hd`: landscape high definition 720p (1280×720)
     *   `lp_hd_v`: portrait high definition 720p (720×1280)
     *   `lp_ud`: landscape ultra-high definition 1080p (1920×1080)
     *   `lp_ud_v`: portrait ultra-high definition 1080p (1080×1920)
     *
     * This parameter is required.
     *
     * @example lp_ld
     *
     * @var string
     */
    public $liveTemplate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the virtual background template.
     *
     * @example sub02
     *
     * @var string
     */
    public $studioName;

    /**
     * @description The name of the subtitle template.
     *
     * @example sub01
     *
     * @var string
     */
    public $subtitleName;

    /**
     * @description The suffix to match.
     *
     * @example test01
     *
     * @var string
     */
    public $suffix;
    protected $_name = [
        'app' => 'App',
        'description' => 'Description',
        'domain' => 'Domain',
        'isLazy' => 'IsLazy',
        'liveTemplate' => 'LiveTemplate',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'studioName' => 'StudioName',
        'subtitleName' => 'SubtitleName',
        'suffix' => 'Suffix',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->isLazy) {
            $res['IsLazy'] = $this->isLazy;
        }
        if (null !== $this->liveTemplate) {
            $res['LiveTemplate'] = $this->liveTemplate;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->studioName) {
            $res['StudioName'] = $this->studioName;
        }
        if (null !== $this->subtitleName) {
            $res['SubtitleName'] = $this->subtitleName;
        }
        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveAIProduceRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['IsLazy'])) {
            $model->isLazy = $map['IsLazy'];
        }
        if (isset($map['LiveTemplate'])) {
            $model->liveTemplate = $map['LiveTemplate'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StudioName'])) {
            $model->studioName = $map['StudioName'];
        }
        if (isset($map['SubtitleName'])) {
            $model->subtitleName = $map['SubtitleName'];
        }
        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateVideoProcessingRequest extends Model
{
    /**
     * @var string
     */
    public $flvSeekEnd;

    /**
     * @var string
     */
    public $flvSeekStart;

    /**
     * @var string
     */
    public $flvVideoSeekMode;

    /**
     * @var string
     */
    public $mp4SeekEnd;

    /**
     * @var string
     */
    public $mp4SeekStart;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $ruleEnable;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var int
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $videoSeekEnable;
    protected $_name = [
        'flvSeekEnd' => 'FlvSeekEnd',
        'flvSeekStart' => 'FlvSeekStart',
        'flvVideoSeekMode' => 'FlvVideoSeekMode',
        'mp4SeekEnd' => 'Mp4SeekEnd',
        'mp4SeekStart' => 'Mp4SeekStart',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
        'videoSeekEnable' => 'VideoSeekEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flvSeekEnd) {
            $res['FlvSeekEnd'] = $this->flvSeekEnd;
        }

        if (null !== $this->flvSeekStart) {
            $res['FlvSeekStart'] = $this->flvSeekStart;
        }

        if (null !== $this->flvVideoSeekMode) {
            $res['FlvVideoSeekMode'] = $this->flvVideoSeekMode;
        }

        if (null !== $this->mp4SeekEnd) {
            $res['Mp4SeekEnd'] = $this->mp4SeekEnd;
        }

        if (null !== $this->mp4SeekStart) {
            $res['Mp4SeekStart'] = $this->mp4SeekStart;
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        if (null !== $this->videoSeekEnable) {
            $res['VideoSeekEnable'] = $this->videoSeekEnable;
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
        if (isset($map['FlvSeekEnd'])) {
            $model->flvSeekEnd = $map['FlvSeekEnd'];
        }

        if (isset($map['FlvSeekStart'])) {
            $model->flvSeekStart = $map['FlvSeekStart'];
        }

        if (isset($map['FlvVideoSeekMode'])) {
            $model->flvVideoSeekMode = $map['FlvVideoSeekMode'];
        }

        if (isset($map['Mp4SeekEnd'])) {
            $model->mp4SeekEnd = $map['Mp4SeekEnd'];
        }

        if (isset($map['Mp4SeekStart'])) {
            $model->mp4SeekStart = $map['Mp4SeekStart'];
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        if (isset($map['VideoSeekEnable'])) {
            $model->videoSeekEnable = $map['VideoSeekEnable'];
        }

        return $model;
    }
}

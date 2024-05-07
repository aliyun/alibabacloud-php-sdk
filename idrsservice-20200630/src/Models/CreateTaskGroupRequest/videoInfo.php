<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTaskGroupRequest;

use AlibabaCloud\Tea\Model;

class videoInfo extends Model
{
    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example 18/mrtc//641905591891464_record_64190559189146412713.mp4.meta
     *
     * @var string
     */
    public $videoMetaUrl;

    /**
     * @example 18/mrtc//641905591891464_record_64190559189146412713.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'ruleId'       => 'RuleId',
        'videoMetaUrl' => 'VideoMetaUrl',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->videoMetaUrl) {
            $res['VideoMetaUrl'] = $this->videoMetaUrl;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['VideoMetaUrl'])) {
            $model->videoMetaUrl = $map['VideoMetaUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}

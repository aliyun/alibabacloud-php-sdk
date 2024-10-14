<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results;
use AlibabaCloud\Tea\Model;

class frames extends Model
{
    /**
     * @description The interval between the start of the video file and the captured frame. Unit: seconds.
     *
     * @example 338
     *
     * @var float
     */
    public $offset;

    /**
     * @description The results of frame moderation parameters such as the label parameter and the confidence parameter.
     *
     * @var results[]
     */
    public $results;

    /**
     * @description Risk Level.
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The temporary URL of a captured frame.
     *
     * @example http://xxxx.abc.jpg
     *
     * @var string
     */
    public $tempUrl;

    /**
     * @description The absolute timestamp. Unit: milliseconds.
     *
     * @example 1684559739000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'offset'    => 'Offset',
        'results'   => 'Results',
        'riskLevel' => 'RiskLevel',
        'tempUrl'   => 'TempUrl',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->tempUrl) {
            $res['TempUrl'] = $this->tempUrl;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['TempUrl'])) {
            $model->tempUrl = $map['TempUrl'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}

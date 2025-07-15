<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveShiftConfigsResponseBody\content;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The application for which you configure time shifting.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The domain name for which you configure time shifting.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Whether to ignore time shift generation for the transcode stream.
     *
     *   true: Ignore time shifting generation.
     *   false: Generate time shifting.
     *
     * The default value is true.
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreTranscode;

    /**
     * @description The name of the live stream for which you configure time shifting.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The number of days for which the time shifting configurations are retained.
     *
     * @example 7
     *
     * @var int
     */
    public $vision;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'ignoreTranscode' => 'IgnoreTranscode',
        'streamName' => 'StreamName',
        'vision' => 'Vision',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ignoreTranscode) {
            $res['IgnoreTranscode'] = $this->ignoreTranscode;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->vision) {
            $res['Vision'] = $this->vision;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IgnoreTranscode'])) {
            $model->ignoreTranscode = $map['IgnoreTranscode'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Vision'])) {
            $model->vision = $map['Vision'];
        }

        return $model;
    }
}

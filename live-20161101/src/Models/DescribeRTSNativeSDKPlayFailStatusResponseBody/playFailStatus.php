<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayFailStatusResponseBody;

use AlibabaCloud\Tea\Model;

class playFailStatus extends Model
{
    /**
     * @description The timestamp of the returned data.
     *
     * @example 2021-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The status code that indicates failed DNS resolution.
     *
     * @example 1
     *
     * @var string
     */
    public $v20001;

    /**
     * @description The status code that indicates failed authentication.
     *
     * @example 2
     *
     * @var string
     */
    public $v20002;

    /**
     * @description The status code that indicates a connection signaling timeout.
     *
     * @example 3
     *
     * @var string
     */
    public $v20011;

    /**
     * @description The status code that indicates a subscription signaling error.
     *
     * @example 4
     *
     * @var string
     */
    public $v20012;

    /**
     * @description The status code indicating that the stream to subscribe to does not exist.
     *
     * @example 5
     *
     * @var string
     */
    public $v20013;

    /**
     * @description The status code that indicates a media packet collection timeout.
     *
     * @example 6
     *
     * @var string
     */
    public $v20052;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'v20001' => 'V20001',
        'v20002' => 'V20002',
        'v20011' => 'V20011',
        'v20012' => 'V20012',
        'v20013' => 'V20013',
        'v20052' => 'V20052',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->v20001) {
            $res['V20001'] = $this->v20001;
        }
        if (null !== $this->v20002) {
            $res['V20002'] = $this->v20002;
        }
        if (null !== $this->v20011) {
            $res['V20011'] = $this->v20011;
        }
        if (null !== $this->v20012) {
            $res['V20012'] = $this->v20012;
        }
        if (null !== $this->v20013) {
            $res['V20013'] = $this->v20013;
        }
        if (null !== $this->v20052) {
            $res['V20052'] = $this->v20052;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playFailStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['V20001'])) {
            $model->v20001 = $map['V20001'];
        }
        if (isset($map['V20002'])) {
            $model->v20002 = $map['V20002'];
        }
        if (isset($map['V20011'])) {
            $model->v20011 = $map['V20011'];
        }
        if (isset($map['V20012'])) {
            $model->v20012 = $map['V20012'];
        }
        if (isset($map['V20013'])) {
            $model->v20013 = $map['V20013'];
        }
        if (isset($map['V20052'])) {
            $model->v20052 = $map['V20052'];
        }

        return $model;
    }
}

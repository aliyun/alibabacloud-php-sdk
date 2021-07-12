<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody\resumeResult;

use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody\resumeResult\resumeResultInfo\channels;
use AlibabaCloud\Tea\Model;

class resumeResultInfo extends Model
{
    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var channels
     */
    public $channels;
    protected $_name = [
        'result'   => 'Result',
        'count'    => 'Count',
        'detail'   => 'Detail',
        'channels' => 'Channels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resumeResultInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody\resumeResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody\resumeResult\resumeResultInfo\channels;

class resumeResultInfo extends Model
{
    /**
     * @var channels
     */
    public $channels;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'channels' => 'Channels',
        'count' => 'Count',
        'detail' => 'Detail',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->channels) {
            $this->channels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toArray($noStream) : $this->channels;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}

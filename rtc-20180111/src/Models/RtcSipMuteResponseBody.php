<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RtcSipMuteResponseBody\errTracks;

class RtcSipMuteResponseBody extends Model
{
    /**
     * @var errTracks[]
     */
    public $errTracks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errTracks' => 'ErrTracks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->errTracks)) {
            Model::validateArray($this->errTracks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errTracks) {
            if (\is_array($this->errTracks)) {
                $res['ErrTracks'] = [];
                $n1 = 0;
                foreach ($this->errTracks as $item1) {
                    $res['ErrTracks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ErrTracks'])) {
            if (!empty($map['ErrTracks'])) {
                $model->errTracks = [];
                $n1 = 0;
                foreach ($map['ErrTracks'] as $item1) {
                    $model->errTracks[$n1] = errTracks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

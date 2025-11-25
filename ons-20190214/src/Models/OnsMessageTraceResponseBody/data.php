<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceResponseBody\data\messageTrack;

class data extends Model
{
    /**
     * @var messageTrack[]
     */
    public $messageTrack;
    protected $_name = [
        'messageTrack' => 'MessageTrack',
    ];

    public function validate()
    {
        if (\is_array($this->messageTrack)) {
            Model::validateArray($this->messageTrack);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageTrack) {
            if (\is_array($this->messageTrack)) {
                $res['MessageTrack'] = [];
                $n1 = 0;
                foreach ($this->messageTrack as $item1) {
                    $res['MessageTrack'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MessageTrack'])) {
            if (!empty($map['MessageTrack'])) {
                $model->messageTrack = [];
                $n1 = 0;
                foreach ($map['MessageTrack'] as $item1) {
                    $model->messageTrack[$n1] = messageTrack::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

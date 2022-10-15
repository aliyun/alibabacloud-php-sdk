<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionRequest;

use AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionRequest\dialogContext\histories;
use AlibabaCloud\Tea\Model;

class dialogContext extends Model
{
    /**
     * @var int
     */
    public $curUtteranceIdx;

    /**
     * @var histories[]
     */
    public $histories;
    protected $_name = [
        'curUtteranceIdx' => 'CurUtteranceIdx',
        'histories'       => 'Histories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curUtteranceIdx) {
            $res['CurUtteranceIdx'] = $this->curUtteranceIdx;
        }
        if (null !== $this->histories) {
            $res['Histories'] = [];
            if (null !== $this->histories && \is_array($this->histories)) {
                $n = 0;
                foreach ($this->histories as $item) {
                    $res['Histories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurUtteranceIdx'])) {
            $model->curUtteranceIdx = $map['CurUtteranceIdx'];
        }
        if (isset($map['Histories'])) {
            if (!empty($map['Histories'])) {
                $model->histories = [];
                $n                = 0;
                foreach ($map['Histories'] as $item) {
                    $model->histories[$n++] = null !== $item ? histories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

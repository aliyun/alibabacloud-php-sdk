<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult\spamAudios\spamAudio;
use AlibabaCloud\Tea\Model;

class spamAudios extends Model
{
    /**
     * @var spamAudio[]
     */
    public $spamAudio;
    protected $_name = [
        'spamAudio' => 'SpamAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spamAudio) {
            $res['SpamAudio'] = [];
            if (null !== $this->spamAudio && \is_array($this->spamAudio)) {
                $n = 0;
                foreach ($this->spamAudio as $item) {
                    $res['SpamAudio'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spamAudios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpamAudio'])) {
            if (!empty($map['SpamAudio'])) {
                $model->spamAudio = [];
                $n                = 0;
                foreach ($map['SpamAudio'] as $item) {
                    $model->spamAudio[$n++] = null !== $item ? spamAudio::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

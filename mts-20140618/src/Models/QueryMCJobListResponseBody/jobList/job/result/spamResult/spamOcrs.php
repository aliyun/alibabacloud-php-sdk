<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult\spamOcrs\spamOcr;
use AlibabaCloud\Tea\Model;

class spamOcrs extends Model
{
    /**
     * @var spamOcr[]
     */
    public $spamOcr;
    protected $_name = [
        'spamOcr' => 'SpamOcr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spamOcr) {
            $res['SpamOcr'] = [];
            if (null !== $this->spamOcr && \is_array($this->spamOcr)) {
                $n = 0;
                foreach ($this->spamOcr as $item) {
                    $res['SpamOcr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spamOcrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpamOcr'])) {
            if (!empty($map['SpamOcr'])) {
                $model->spamOcr = [];
                $n              = 0;
                foreach ($map['SpamOcr'] as $item) {
                    $model->spamOcr[$n++] = null !== $item ? spamOcr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

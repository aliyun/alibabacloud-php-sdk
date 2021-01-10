<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\m3U8NonStandardSupport\TS;
use AlibabaCloud\Tea\Model;

class m3U8NonStandardSupport extends Model
{
    /**
     * @var TS
     */
    public $TS;
    protected $_name = [
        'TS' => 'TS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->TS) {
            $res['TS'] = null !== $this->TS ? $this->TS->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return m3U8NonStandardSupport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TS'])) {
            $model->TS = TS::fromMap($map['TS']);
        }

        return $model;
    }
}

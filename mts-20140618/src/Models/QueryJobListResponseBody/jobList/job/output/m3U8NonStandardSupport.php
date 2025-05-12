<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\m3U8NonStandardSupport\TS;

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
        if (null !== $this->TS) {
            $this->TS->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->TS) {
            $res['TS'] = null !== $this->TS ? $this->TS->toArray($noStream) : $this->TS;
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
        if (isset($map['TS'])) {
            $model->TS = TS::fromMap($map['TS']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMImageChatResponseBody\data;

use AlibabaCloud\Dara\Model;

class rt extends Model
{
    /**
     * @var int
     */
    public $firstRt;

    /**
     * @var int
     */
    public $totalRt;
    protected $_name = [
        'firstRt' => 'firstRt',
        'totalRt' => 'totalRt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstRt) {
            $res['firstRt'] = $this->firstRt;
        }

        if (null !== $this->totalRt) {
            $res['totalRt'] = $this->totalRt;
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
        if (isset($map['firstRt'])) {
            $model->firstRt = $map['firstRt'];
        }

        if (isset($map['totalRt'])) {
            $model->totalRt = $map['totalRt'];
        }

        return $model;
    }
}

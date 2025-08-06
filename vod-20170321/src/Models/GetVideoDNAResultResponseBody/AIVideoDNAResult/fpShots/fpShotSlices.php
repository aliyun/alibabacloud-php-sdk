<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoDNAResultResponseBody\AIVideoDNAResult\fpShots;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoDNAResultResponseBody\AIVideoDNAResult\fpShots\fpShotSlices\duplication;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoDNAResultResponseBody\AIVideoDNAResult\fpShots\fpShotSlices\input;

class fpShotSlices extends Model
{
    /**
     * @var duplication
     */
    public $duplication;

    /**
     * @var input
     */
    public $input;
    protected $_name = [
        'duplication' => 'Duplication',
        'input' => 'Input',
    ];

    public function validate()
    {
        if (null !== $this->duplication) {
            $this->duplication->validate();
        }
        if (null !== $this->input) {
            $this->input->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duplication) {
            $res['Duplication'] = null !== $this->duplication ? $this->duplication->toArray($noStream) : $this->duplication;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
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
        if (isset($map['Duplication'])) {
            $model->duplication = duplication::fromMap($map['Duplication']);
        }

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}

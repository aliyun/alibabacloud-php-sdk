<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest\videoSettings\videoCodecSetting;

use AlibabaCloud\Dara\Model;

class gop extends Model
{
    /**
     * @var int
     */
    public $bframesNum;

    /**
     * @var int
     */
    public $gopSize;

    /**
     * @var string
     */
    public $gopSizeUnits;
    protected $_name = [
        'bframesNum' => 'BframesNum',
        'gopSize' => 'GopSize',
        'gopSizeUnits' => 'GopSizeUnits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bframesNum) {
            $res['BframesNum'] = $this->bframesNum;
        }

        if (null !== $this->gopSize) {
            $res['GopSize'] = $this->gopSize;
        }

        if (null !== $this->gopSizeUnits) {
            $res['GopSizeUnits'] = $this->gopSizeUnits;
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
        if (isset($map['BframesNum'])) {
            $model->bframesNum = $map['BframesNum'];
        }

        if (isset($map['GopSize'])) {
            $model->gopSize = $map['GopSize'];
        }

        if (isset($map['GopSizeUnits'])) {
            $model->gopSizeUnits = $map['GopSizeUnits'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting;

use AlibabaCloud\Tea\Model;

class gop extends Model
{
    /**
     * @description The number of B frames. Valid values: 1 to 3.
     *
     * @example 3
     *
     * @var int
     */
    public $bframesNum;

    /**
     * @description The GOP size. When GopSizeUnits is set to SECONDS, the value range is from 1 to 20. When GopSizeUnits is set to FRAMES, the value range is from 1 to 3000.
     *
     * @example 90
     *
     * @var int
     */
    public $gopSize;

    /**
     * @description The GOP size unit. Valid values: FRAMES and SECONDS.
     *
     * @example FRAMES
     *
     * @var string
     */
    public $gopSizeUnits;
    protected $_name = [
        'bframesNum'   => 'BframesNum',
        'gopSize'      => 'GopSize',
        'gopSizeUnits' => 'GopSizeUnits',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return gop
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class EraseVideoSubtitlesAdvanceRequest extends Model
{
    /**
     * @var float
     */
    public $BH;

    /**
     * @var float
     */
    public $BW;

    /**
     * @var float
     */
    public $BX;

    /**
     * @var float
     */
    public $BY;

    /**
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'BH' => 'BH',
        'BW' => 'BW',
        'BX' => 'BX',
        'BY' => 'BY',
        'videoUrlObject' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->BH) {
            $res['BH'] = $this->BH;
        }

        if (null !== $this->BW) {
            $res['BW'] = $this->BW;
        }

        if (null !== $this->BX) {
            $res['BX'] = $this->BX;
        }

        if (null !== $this->BY) {
            $res['BY'] = $this->BY;
        }

        if (null !== $this->videoUrlObject) {
            $res['VideoUrl'] = $this->videoUrlObject;
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
        if (isset($map['BH'])) {
            $model->BH = $map['BH'];
        }

        if (isset($map['BW'])) {
            $model->BW = $map['BW'];
        }

        if (isset($map['BX'])) {
            $model->BX = $map['BX'];
        }

        if (isset($map['BY'])) {
            $model->BY = $map['BY'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrlObject = $map['VideoUrl'];
        }

        return $model;
    }
}

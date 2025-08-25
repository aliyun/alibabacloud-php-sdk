<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListAdvanceRequest\params;
use GuzzleHttp\Psr7\Stream;

class RecognizeVideoCastCrewListAdvanceRequest extends Model
{
    /**
     * @var params[]
     */
    public $params;

    /**
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'params' => 'Params',
        'videoUrlObject' => 'VideoUrl',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['Params'] = [];
                $n1 = 0;
                foreach ($this->params as $item1) {
                    $res['Params'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                $n1 = 0;
                foreach ($map['Params'] as $item1) {
                    $model->params[$n1] = params::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrlObject = $map['VideoUrl'];
        }

        return $model;
    }
}

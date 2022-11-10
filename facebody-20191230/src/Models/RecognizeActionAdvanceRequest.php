<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionAdvanceRequest\URLList;
use AlibabaCloud\Tea\Model;

class RecognizeActionAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var URLList[]
     */
    public $URLList;

    /**
     * @var int[]
     */
    public $videoData;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'type'      => 'Type',
        'URLList'   => 'URLList',
        'videoData' => 'VideoData',
        'videoUrl'  => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoData) {
            $res['VideoData'] = $this->videoData;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeActionAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoData'])) {
            $model->videoData = $map['VideoData'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionRequest\URLList;

class RecognizeActionRequest extends Model
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
     * @var string
     */
    public $videoData;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'type' => 'Type',
        'URLList' => 'URLList',
        'videoData' => 'VideoData',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        if (\is_array($this->URLList)) {
            Model::validateArray($this->URLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->URLList) {
            if (\is_array($this->URLList)) {
                $res['URLList'] = [];
                $n1 = 0;
                foreach ($this->URLList as $item1) {
                    $res['URLList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n1 = 0;
                foreach ($map['URLList'] as $item1) {
                    $model->URLList[$n1] = URLList::fromMap($item1);
                    ++$n1;
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

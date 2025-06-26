<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponseBody\listLogContent\contents;

class listLogContent extends Model
{
    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var int
     */
    public $totalLength;
    protected $_name = [
        'contents' => 'contents',
        'totalLength' => 'totalLength',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalLength) {
            $res['totalLength'] = $this->totalLength;
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
        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['contents'] as $item1) {
                    $model->contents[$n1] = contents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalLength'])) {
            $model->totalLength = $map['totalLength'];
        }

        return $model;
    }
}

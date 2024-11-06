<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponseBody;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponseBody\listLogContent\contents;
use AlibabaCloud\Tea\Model;

class listLogContent extends Model
{
    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalLength;
    protected $_name = [
        'contents'    => 'contents',
        'totalLength' => 'totalLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalLength) {
            $res['totalLength'] = $this->totalLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listLogContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalLength'])) {
            $model->totalLength = $map['totalLength'];
        }

        return $model;
    }
}

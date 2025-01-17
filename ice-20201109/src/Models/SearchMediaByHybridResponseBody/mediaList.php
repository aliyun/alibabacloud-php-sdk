<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByHybridResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByHybridResponseBody\mediaList\clipInfo;

class mediaList extends Model
{
    /**
     * @var clipInfo[]
     */
    public $clipInfo;
    /**
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'clipInfo' => 'ClipInfo',
        'mediaId'  => 'MediaId',
    ];

    public function validate()
    {
        if (\is_array($this->clipInfo)) {
            Model::validateArray($this->clipInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipInfo) {
            if (\is_array($this->clipInfo)) {
                $res['ClipInfo'] = [];
                $n1              = 0;
                foreach ($this->clipInfo as $item1) {
                    $res['ClipInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['ClipInfo'])) {
            if (!empty($map['ClipInfo'])) {
                $model->clipInfo = [];
                $n1              = 0;
                foreach ($map['ClipInfo'] as $item1) {
                    $model->clipInfo[$n1++] = clipInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody\forbiddenList\mediaForbiddenReasonDTO;
use AlibabaCloud\Tea\Model;

class forbiddenList extends Model
{
    /**
     * @var mediaForbiddenReasonDTO[]
     */
    public $mediaForbiddenReasonDTO;
    protected $_name = [
        'mediaForbiddenReasonDTO' => 'MediaForbiddenReasonDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaForbiddenReasonDTO) {
            $res['MediaForbiddenReasonDTO'] = [];
            if (null !== $this->mediaForbiddenReasonDTO && \is_array($this->mediaForbiddenReasonDTO)) {
                $n = 0;
                foreach ($this->mediaForbiddenReasonDTO as $item) {
                    $res['MediaForbiddenReasonDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forbiddenList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaForbiddenReasonDTO'])) {
            if (!empty($map['MediaForbiddenReasonDTO'])) {
                $model->mediaForbiddenReasonDTO = [];
                $n                              = 0;
                foreach ($map['MediaForbiddenReasonDTO'] as $item) {
                    $model->mediaForbiddenReasonDTO[$n++] = null !== $item ? mediaForbiddenReasonDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

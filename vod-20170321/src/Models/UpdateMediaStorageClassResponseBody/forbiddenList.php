<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody\forbiddenList\mediaForbiddenReasonDTO;

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
        if (\is_array($this->mediaForbiddenReasonDTO)) {
            Model::validateArray($this->mediaForbiddenReasonDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaForbiddenReasonDTO) {
            if (\is_array($this->mediaForbiddenReasonDTO)) {
                $res['MediaForbiddenReasonDTO'] = [];
                $n1 = 0;
                foreach ($this->mediaForbiddenReasonDTO as $item1) {
                    $res['MediaForbiddenReasonDTO'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['MediaForbiddenReasonDTO'])) {
            if (!empty($map['MediaForbiddenReasonDTO'])) {
                $model->mediaForbiddenReasonDTO = [];
                $n1 = 0;
                foreach ($map['MediaForbiddenReasonDTO'] as $item1) {
                    $model->mediaForbiddenReasonDTO[$n1++] = mediaForbiddenReasonDTO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

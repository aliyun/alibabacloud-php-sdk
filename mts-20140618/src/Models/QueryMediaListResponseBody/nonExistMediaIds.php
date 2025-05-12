<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody;

use AlibabaCloud\Dara\Model;

class nonExistMediaIds extends Model
{
    /**
     * @var string[]
     */
    public $mediaId;
    protected $_name = [
        'mediaId' => 'MediaId',
    ];

    public function validate()
    {
        if (\is_array($this->mediaId)) {
            Model::validateArray($this->mediaId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaId) {
            if (\is_array($this->mediaId)) {
                $res['MediaId'] = [];
                $n1 = 0;
                foreach ($this->mediaId as $item1) {
                    $res['MediaId'][$n1++] = $item1;
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
        if (isset($map['MediaId'])) {
            if (!empty($map['MediaId'])) {
                $model->mediaId = [];
                $n1 = 0;
                foreach ($map['MediaId'] as $item1) {
                    $model->mediaId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

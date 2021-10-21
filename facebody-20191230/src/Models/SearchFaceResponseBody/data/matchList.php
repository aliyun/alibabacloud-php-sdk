<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponseBody\data\matchList\faceItems;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponseBody\data\matchList\location;
use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    /**
     * @var faceItems[]
     */
    public $faceItems;

    /**
     * @var location
     */
    public $location;

    /**
     * @var float
     */
    public $qualitieScore;
    protected $_name = [
        'faceItems'     => 'FaceItems',
        'location'      => 'Location',
        'qualitieScore' => 'QualitieScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceItems) {
            $res['FaceItems'] = [];
            if (null !== $this->faceItems && \is_array($this->faceItems)) {
                $n = 0;
                foreach ($this->faceItems as $item) {
                    $res['FaceItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->qualitieScore) {
            $res['QualitieScore'] = $this->qualitieScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceItems'])) {
            if (!empty($map['FaceItems'])) {
                $model->faceItems = [];
                $n                = 0;
                foreach ($map['FaceItems'] as $item) {
                    $model->faceItems[$n++] = null !== $item ? faceItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['QualitieScore'])) {
            $model->qualitieScore = $map['QualitieScore'];
        }

        return $model;
    }
}

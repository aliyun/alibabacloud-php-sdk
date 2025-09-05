<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponseBody\data\matchList\faceItems;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponseBody\data\matchList\location;

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
        'faceItems' => 'FaceItems',
        'location' => 'Location',
        'qualitieScore' => 'QualitieScore',
    ];

    public function validate()
    {
        if (\is_array($this->faceItems)) {
            Model::validateArray($this->faceItems);
        }
        if (null !== $this->location) {
            $this->location->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceItems) {
            if (\is_array($this->faceItems)) {
                $res['FaceItems'] = [];
                $n1 = 0;
                foreach ($this->faceItems as $item1) {
                    $res['FaceItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
        }

        if (null !== $this->qualitieScore) {
            $res['QualitieScore'] = $this->qualitieScore;
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
        if (isset($map['FaceItems'])) {
            if (!empty($map['FaceItems'])) {
                $model->faceItems = [];
                $n1 = 0;
                foreach ($map['FaceItems'] as $item1) {
                    $model->faceItems[$n1] = faceItems::fromMap($item1);
                    ++$n1;
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

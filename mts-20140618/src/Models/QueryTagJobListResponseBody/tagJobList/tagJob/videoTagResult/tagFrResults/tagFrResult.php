<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult\tagFrResults;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult\tagFrResults\tagFrResult\tagFaces;
use AlibabaCloud\Tea\Model;

class tagFrResult extends Model
{
    /**
     * @var tagFaces
     */
    public $tagFaces;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'tagFaces' => 'TagFaces',
        'time'     => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagFaces) {
            $res['TagFaces'] = null !== $this->tagFaces ? $this->tagFaces->toMap() : null;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagFrResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagFaces'])) {
            $model->tagFaces = tagFaces::fromMap($map['TagFaces']);
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

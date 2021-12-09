<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult\tagAnResults;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult\tagFrResults;
use AlibabaCloud\Tea\Model;

class videoTagResult extends Model
{
    /**
     * @var string
     */
    public $details;

    /**
     * @var tagAnResults
     */
    public $tagAnResults;

    /**
     * @var tagFrResults
     */
    public $tagFrResults;
    protected $_name = [
        'details'      => 'Details',
        'tagAnResults' => 'TagAnResults',
        'tagFrResults' => 'TagFrResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->tagAnResults) {
            $res['TagAnResults'] = null !== $this->tagAnResults ? $this->tagAnResults->toMap() : null;
        }
        if (null !== $this->tagFrResults) {
            $res['TagFrResults'] = null !== $this->tagFrResults ? $this->tagFrResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoTagResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['TagAnResults'])) {
            $model->tagAnResults = tagAnResults::fromMap($map['TagAnResults']);
        }
        if (isset($map['TagFrResults'])) {
            $model->tagFrResults = tagFrResults::fromMap($map['TagFrResults']);
        }

        return $model;
    }
}

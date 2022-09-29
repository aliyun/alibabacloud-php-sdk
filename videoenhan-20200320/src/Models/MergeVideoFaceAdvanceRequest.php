<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MergeVideoFaceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $postURLObject;

    /**
     * @var Stream
     */
    public $referenceURLObject;

    /**
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'postURLObject'      => 'PostURL',
        'referenceURLObject' => 'ReferenceURL',
        'videoURLObject'     => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postURLObject) {
            $res['PostURL'] = $this->postURLObject;
        }
        if (null !== $this->referenceURLObject) {
            $res['ReferenceURL'] = $this->referenceURLObject;
        }
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostURL'])) {
            $model->postURLObject = $map['PostURL'];
        }
        if (isset($map['ReferenceURL'])) {
            $model->referenceURLObject = $map['ReferenceURL'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}

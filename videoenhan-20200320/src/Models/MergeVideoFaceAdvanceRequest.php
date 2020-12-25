<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class MergeVideoFaceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoURLObject;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $postURL;

    /**
     * @var string
     */
    public $referenceURL;
    protected $_name = [
        'videoURLObject' => 'VideoURLObject',
        'async'          => 'Async',
        'postURL'        => 'PostURL',
        'referenceURL'   => 'ReferenceURL',
    ];

    public function validate()
    {
        Model::validateRequired('videoURLObject', $this->videoURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURLObject) {
            $res['VideoURLObject'] = $this->videoURLObject;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->postURL) {
            $res['PostURL'] = $this->postURL;
        }
        if (null !== $this->referenceURL) {
            $res['ReferenceURL'] = $this->referenceURL;
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
        if (isset($map['VideoURLObject'])) {
            $model->videoURLObject = $map['VideoURLObject'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['PostURL'])) {
            $model->postURL = $map['PostURL'];
        }
        if (isset($map['ReferenceURL'])) {
            $model->referenceURL = $map['ReferenceURL'];
        }

        return $model;
    }
}

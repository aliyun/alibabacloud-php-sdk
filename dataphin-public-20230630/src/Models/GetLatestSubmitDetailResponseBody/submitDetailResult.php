<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailResponseBody\submitDetailResult\releaseObject;
use AlibabaCloud\Tea\Model;

class submitDetailResult extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @var releaseObject
     */
    public $releaseObject;

    /**
     * @example TO_BE_PUBLISHED
     *
     * @var string
     */
    public $submitStatus;

    /**
     * @example tag
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'id' => 'Id',
        'publishStatus' => 'PublishStatus',
        'releaseObject' => 'ReleaseObject',
        'submitStatus' => 'SubmitStatus',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->releaseObject) {
            $res['ReleaseObject'] = null !== $this->releaseObject ? $this->releaseObject->toMap() : null;
        }
        if (null !== $this->submitStatus) {
            $res['SubmitStatus'] = $this->submitStatus;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return submitDetailResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['ReleaseObject'])) {
            $model->releaseObject = releaseObject::fromMap($map['ReleaseObject']);
        }
        if (isset($map['SubmitStatus'])) {
            $model->submitStatus = $map['SubmitStatus'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}

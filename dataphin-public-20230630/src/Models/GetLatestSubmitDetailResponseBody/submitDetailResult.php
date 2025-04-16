<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailResponseBody\submitDetailResult\releaseObject;

class submitDetailResult extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var releaseObject
     */
    public $releaseObject;

    /**
     * @var string
     */
    public $submitStatus;

    /**
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

    public function validate()
    {
        if (null !== $this->releaseObject) {
            $this->releaseObject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }

        if (null !== $this->releaseObject) {
            $res['ReleaseObject'] = null !== $this->releaseObject ? $this->releaseObject->toArray($noStream) : $this->releaseObject;
        }

        if (null !== $this->submitStatus) {
            $res['SubmitStatus'] = $this->submitStatus;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetServiceResponseBody;

use AlibabaCloud\Dara\Model;

class latestProdReleaseOrder extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $releaseInfo;

    /**
     * @var string
     */
    public $releaseOrderId;

    /**
     * @var string
     */
    public $releaser;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'content' => 'Content',
        'imageVersion' => 'ImageVersion',
        'releaseInfo' => 'ReleaseInfo',
        'releaseOrderId' => 'ReleaseOrderId',
        'releaser' => 'Releaser',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }

        if (null !== $this->releaseInfo) {
            $res['ReleaseInfo'] = $this->releaseInfo;
        }

        if (null !== $this->releaseOrderId) {
            $res['ReleaseOrderId'] = $this->releaseOrderId;
        }

        if (null !== $this->releaser) {
            $res['Releaser'] = $this->releaser;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }

        if (isset($map['ReleaseInfo'])) {
            $model->releaseInfo = $map['ReleaseInfo'];
        }

        if (isset($map['ReleaseOrderId'])) {
            $model->releaseOrderId = $map['ReleaseOrderId'];
        }

        if (isset($map['Releaser'])) {
            $model->releaser = $map['Releaser'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}

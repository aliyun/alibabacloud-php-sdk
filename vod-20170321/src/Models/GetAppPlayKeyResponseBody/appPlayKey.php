<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAppPlayKeyResponseBody;

use AlibabaCloud\Dara\Model;

class appPlayKey extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $playKey;
    protected $_name = [
        'appId' => 'AppId',
        'creationTime' => 'CreationTime',
        'modificationTime' => 'ModificationTime',
        'playKey' => 'PlayKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        if (null !== $this->playKey) {
            $res['PlayKey'] = $this->playKey;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        if (isset($map['PlayKey'])) {
            $model->playKey = $map['PlayKey'];
        }

        return $model;
    }
}

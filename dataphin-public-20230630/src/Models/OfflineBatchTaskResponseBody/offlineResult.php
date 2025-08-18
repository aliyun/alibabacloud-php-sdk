<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OfflineBatchTaskResponseBody;

use AlibabaCloud\Dara\Model;

class offlineResult extends Model
{
    /**
     * @var int
     */
    public $publishObjectId;
    protected $_name = [
        'publishObjectId' => 'PublishObjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publishObjectId) {
            $res['PublishObjectId'] = $this->publishObjectId;
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
        if (isset($map['PublishObjectId'])) {
            $model->publishObjectId = $map['PublishObjectId'];
        }

        return $model;
    }
}

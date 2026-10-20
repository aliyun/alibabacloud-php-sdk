<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class TableConsumer extends Model
{
    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var int
     */
    public $nextSnapshot;
    protected $_name = [
        'consumerId' => 'consumerId',
        'lastModifiedTime' => 'lastModifiedTime',
        'nextSnapshot' => 'nextSnapshot',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->nextSnapshot) {
            $res['nextSnapshot'] = $this->nextSnapshot;
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
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['nextSnapshot'])) {
            $model->nextSnapshot = $map['nextSnapshot'];
        }

        return $model;
    }
}

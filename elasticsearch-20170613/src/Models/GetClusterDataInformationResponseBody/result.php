<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponseBody\result\metaInfo;

class result extends Model
{
    /**
     * @var bool
     */
    public $connectable;

    /**
     * @var metaInfo
     */
    public $metaInfo;
    protected $_name = [
        'connectable' => 'connectable',
        'metaInfo' => 'metaInfo',
    ];

    public function validate()
    {
        if (null !== $this->metaInfo) {
            $this->metaInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectable) {
            $res['connectable'] = $this->connectable;
        }

        if (null !== $this->metaInfo) {
            $res['metaInfo'] = null !== $this->metaInfo ? $this->metaInfo->toArray($noStream) : $this->metaInfo;
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
        if (isset($map['connectable'])) {
            $model->connectable = $map['connectable'];
        }

        if (isset($map['metaInfo'])) {
            $model->metaInfo = metaInfo::fromMap($map['metaInfo']);
        }

        return $model;
    }
}

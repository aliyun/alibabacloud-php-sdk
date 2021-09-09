<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponseBody\result\metaInfo;
use AlibabaCloud\Tea\Model;

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
        'metaInfo'    => 'metaInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectable) {
            $res['connectable'] = $this->connectable;
        }
        if (null !== $this->metaInfo) {
            $res['metaInfo'] = null !== $this->metaInfo ? $this->metaInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateNamespaceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $namespaceUid;
    protected $_name = [
        'namespaceUid' => 'NamespaceUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceUid) {
            $res['NamespaceUid'] = $this->namespaceUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceUid'])) {
            $model->namespaceUid = $map['NamespaceUid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectAclResponseBody;

use AlibabaCloud\Tea\Model;

class accessControlList extends Model
{
    /**
     * @example private
     *
     * @var string
     */
    public $ACL;
    protected $_name = [
        'ACL' => 'Grant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ACL) {
            $res['Grant'] = $this->ACL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessControlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Grant'])) {
            $model->ACL = $map['Grant'];
        }

        return $model;
    }
}

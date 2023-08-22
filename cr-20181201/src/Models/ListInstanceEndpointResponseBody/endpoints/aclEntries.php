<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody\endpoints;

use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @description Details about the ACL.
     *
     * @example null
     *
     * @var string
     */
    public $entry;
    protected $_name = [
        'entry' => 'Entry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }

        return $model;
    }
}

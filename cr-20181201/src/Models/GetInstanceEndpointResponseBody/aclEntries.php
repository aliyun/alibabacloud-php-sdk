<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @description Remarks for public IP address whitelists.
     *
     * @example 1
     *
     * @var string
     */
    public $comment;

    /**
     * @description The public IP address whitelist.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $entry;
    protected $_name = [
        'comment' => 'Comment',
        'entry'   => 'Entry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveTenantMemberRequest;

use AlibabaCloud\Tea\Model;

class removeCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123@xx.com
     *
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'sourceId' => 'SourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removeCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}

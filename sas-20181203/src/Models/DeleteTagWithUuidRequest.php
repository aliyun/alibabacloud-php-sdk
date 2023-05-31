<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteTagWithUuidRequest extends Model
{
    /**
     * @description The name of the tag.
     *
     * @example abc
     *
     * @var string
     */
    public $tagName;

    /**
     * @description The UUIDs of servers.
     *
     * > If the UuidList parameter is specified, Security Center removes the tag only from the servers whose UUIDs are specified by UuidList. If the UuidList parameter is not specified, Security Center removes the tag from all servers.
     * @example 111-xx,aa-bb
     *
     * @var string
     */
    public $uuidList;
    protected $_name = [
        'tagName'  => 'TagName',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTagWithUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }

        return $model;
    }
}

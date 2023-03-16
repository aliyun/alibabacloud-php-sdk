<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaTableIntroWikiRequest extends Model
{
    /**
     * @description The details of the instructions on how to use the metatable.
     *
     * @example abc
     *
     * @var string
     */
    public $content;

    /**
     * @description The GUID of the metatable. Specify the GUID in the format of odps.{projectName}.{tableName}.
     *
     * @example odps.test.table1
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'content'   => 'Content',
        'tableGuid' => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetaTableIntroWikiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}

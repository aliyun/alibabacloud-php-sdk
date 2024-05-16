<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableIntroWikiRequest extends Model
{
    /**
     * @description The GUID of the metatable.
     *
     * This parameter is required.
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The version of the instructions.
     *
     * @example 1
     *
     * @var int
     */
    public $wikiVersion;
    protected $_name = [
        'tableGuid'   => 'TableGuid',
        'wikiVersion' => 'WikiVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->wikiVersion) {
            $res['WikiVersion'] = $this->wikiVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaTableIntroWikiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['WikiVersion'])) {
            $model->wikiVersion = $map['WikiVersion'];
        }

        return $model;
    }
}

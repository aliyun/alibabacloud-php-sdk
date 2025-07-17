<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CrawlerType;

use AlibabaCloud\Tea\Model;

class supportedEntityTypes extends Model
{
    /**
     * @example 如对于maxcompute-schema类型，schema层级是否存在可选（是否开启三层模型）
     *
     * @var bool
     */
    public $optional;

    /**
     * @example database
     *
     * @var string
     */
    public $parentSubType;

    /**
     * @example table
     *
     * @var string
     */
    public $subType;

    /**
     * @example dlf-table
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'optional' => 'Optional',
        'parentSubType' => 'ParentSubType',
        'subType' => 'SubType',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->optional) {
            $res['Optional'] = $this->optional;
        }
        if (null !== $this->parentSubType) {
            $res['ParentSubType'] = $this->parentSubType;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEntityTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Optional'])) {
            $model->optional = $map['Optional'];
        }
        if (isset($map['ParentSubType'])) {
            $model->parentSubType = $map['ParentSubType'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

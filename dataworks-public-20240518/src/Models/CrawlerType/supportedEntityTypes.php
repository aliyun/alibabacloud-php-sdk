<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CrawlerType;

use AlibabaCloud\Dara\Model;

class supportedEntityTypes extends Model
{
    /**
     * @var bool
     */
    public $optional;

    /**
     * @var string
     */
    public $parentSubType;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'optional' => 'Optional',
        'parentSubType' => 'ParentSubType',
        'subType' => 'SubType',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

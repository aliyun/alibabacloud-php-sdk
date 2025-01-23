<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetMetaTableIntroWikiRequest extends Model
{
    /**
     * @var string
     */
    public $tableGuid;
    /**
     * @var int
     */
    public $wikiVersion;
    protected $_name = [
        'tableGuid'   => 'TableGuid',
        'wikiVersion' => 'WikiVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

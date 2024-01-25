<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListFoundationComponentVersionsRequest extends Model
{
    /**
     * @var bool
     */
    public $onlyEnabled;

    /**
     * @var string
     */
    public $parentComponentRelationUID;
    protected $_name = [
        'onlyEnabled'                => 'onlyEnabled',
        'parentComponentRelationUID' => 'parentComponentRelationUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlyEnabled) {
            $res['onlyEnabled'] = $this->onlyEnabled;
        }
        if (null !== $this->parentComponentRelationUID) {
            $res['parentComponentRelationUID'] = $this->parentComponentRelationUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFoundationComponentVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['onlyEnabled'])) {
            $model->onlyEnabled = $map['onlyEnabled'];
        }
        if (isset($map['parentComponentRelationUID'])) {
            $model->parentComponentRelationUID = $map['parentComponentRelationUID'];
        }

        return $model;
    }
}

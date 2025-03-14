<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse\standards\requirements;

use AlibabaCloud\Tea\Model;

class sections extends Model
{
    /**
     * @description The ID of the section for the check item.
     *
     * @example 177
     *
     * @var int
     */
    public $id;

    /**
     * @description The display name of the section for the check item.
     *
     * @example Access Control
     *
     * @var string
     */
    public $showName;
    protected $_name = [
        'id' => 'Id',
        'showName' => 'ShowName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}

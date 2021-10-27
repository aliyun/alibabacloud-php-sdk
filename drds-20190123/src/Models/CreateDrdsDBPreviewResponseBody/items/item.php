<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreviewResponseBody\items;

use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreviewResponseBody\items\item\dbNames;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var dbNames
     */
    public $dbNames;
    protected $_name = [
        'dbInstanceId' => 'DbInstanceId',
        'dbNames'      => 'DbNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = null !== $this->dbNames ? $this->dbNames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = dbNames::fromMap($map['DbNames']);
        }

        return $model;
    }
}

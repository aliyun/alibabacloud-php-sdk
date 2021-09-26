<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSupportDbTypesResponseBody;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSupportDbTypesResponseBody\typeList\dbVersions;
use AlibabaCloud\Tea\Model;

class typeList extends Model
{
    /**
     * @var int
     */
    public $dbType;

    /**
     * @var string
     */
    public $dbTypeName;

    /**
     * @var dbVersions[]
     */
    public $dbVersions;
    protected $_name = [
        'dbType'     => 'DbType',
        'dbTypeName' => 'DbTypeName',
        'dbVersions' => 'DbVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbTypeName) {
            $res['DbTypeName'] = $this->dbTypeName;
        }
        if (null !== $this->dbVersions) {
            $res['DbVersions'] = [];
            if (null !== $this->dbVersions && \is_array($this->dbVersions)) {
                $n = 0;
                foreach ($this->dbVersions as $item) {
                    $res['DbVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbTypeName'])) {
            $model->dbTypeName = $map['DbTypeName'];
        }
        if (isset($map['DbVersions'])) {
            if (!empty($map['DbVersions'])) {
                $model->dbVersions = [];
                $n                 = 0;
                foreach ($map['DbVersions'] as $item) {
                    $model->dbVersions[$n++] = null !== $item ? dbVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

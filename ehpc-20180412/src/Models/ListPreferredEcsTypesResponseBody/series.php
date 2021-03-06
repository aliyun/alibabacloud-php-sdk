<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\roles;
use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @var string
     */
    public $seriesId;

    /**
     * @var string
     */
    public $seriesName;

    /**
     * @var roles
     */
    public $roles;
    protected $_name = [
        'seriesId'   => 'SeriesId',
        'seriesName' => 'SeriesName',
        'roles'      => 'Roles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seriesId) {
            $res['SeriesId'] = $this->seriesId;
        }
        if (null !== $this->seriesName) {
            $res['SeriesName'] = $this->seriesName;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SeriesId'])) {
            $model->seriesId = $map['SeriesId'];
        }
        if (isset($map['SeriesName'])) {
            $model->seriesName = $map['SeriesName'];
        }
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }

        return $model;
    }
}

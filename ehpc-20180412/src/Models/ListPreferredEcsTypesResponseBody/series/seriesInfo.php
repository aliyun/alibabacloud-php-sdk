<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo\roles;

class seriesInfo extends Model
{
    /**
     * @var roles
     */
    public $roles;

    /**
     * @var string
     */
    public $seriesId;

    /**
     * @var string
     */
    public $seriesName;
    protected $_name = [
        'roles' => 'Roles',
        'seriesId' => 'SeriesId',
        'seriesName' => 'SeriesName',
    ];

    public function validate()
    {
        if (null !== $this->roles) {
            $this->roles->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toArray($noStream) : $this->roles;
        }

        if (null !== $this->seriesId) {
            $res['SeriesId'] = $this->seriesId;
        }

        if (null !== $this->seriesName) {
            $res['SeriesName'] = $this->seriesName;
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
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }

        if (isset($map['SeriesId'])) {
            $model->seriesId = $map['SeriesId'];
        }

        if (isset($map['SeriesName'])) {
            $model->seriesName = $map['SeriesName'];
        }

        return $model;
    }
}

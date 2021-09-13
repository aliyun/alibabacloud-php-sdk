<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class personalOutboundNumberList extends Model
{
    /**
     * @var string
     */
    public $number;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'number'   => 'Number',
        'active'   => 'Active',
        'city'     => 'City',
        'usage'    => 'Usage',
        'province' => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return personalOutboundNumberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}

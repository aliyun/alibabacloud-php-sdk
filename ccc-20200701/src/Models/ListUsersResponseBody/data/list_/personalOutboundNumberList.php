<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class personalOutboundNumberList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $city;

    /**
     * @example 0830011****
     *
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $province;

    /**
     * @example Bidirection
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'active'   => 'Active',
        'city'     => 'City',
        'number'   => 'Number',
        'province' => 'Province',
        'usage'    => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}

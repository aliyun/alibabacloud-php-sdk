<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotoStoreResponseBody\photoStore;

use AlibabaCloud\Tea\Model;

class buckets extends Model
{
    /**
     * @var string
     */
    public $acl;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'acl'    => 'Acl',
        'state'  => 'State',
        'region' => 'Region',
        'name'   => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = $this->acl;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buckets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acl'])) {
            $model->acl = $map['Acl'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

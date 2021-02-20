<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\ListUserHostsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $OS;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'index'     => 'Index',
        'OS'        => 'OS',
        'state'     => 'State',
        'hostname'  => 'Hostname',
        'updatedAt' => 'UpdatedAt',
        'IP'        => 'IP',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->OS) {
            $res['OS'] = $this->OS;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['OS'])) {
            $model->OS = $map['OS'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

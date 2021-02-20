<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeHostsResponseBody;

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
     * @var string
     */
    public $isUp;
    protected $_name = [
        'index'     => 'Index',
        'OS'        => 'OS',
        'hostname'  => 'Hostname',
        'updatedAt' => 'UpdatedAt',
        'IP'        => 'IP',
        'isUp'      => 'IsUp',
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
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->isUp) {
            $res['IsUp'] = $this->isUp;
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
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['IsUp'])) {
            $model->isUp = $map['IsUp'];
        }

        return $model;
    }
}

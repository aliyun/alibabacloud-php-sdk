<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models\ListServerlessTopNAppsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $error;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $region;

    /**
     * @var float
     */
    public $rt;
    protected $_name = [
        'count'  => 'Count',
        'error'  => 'Error',
        'name'   => 'Name',
        'pid'    => 'Pid',
        'region' => 'Region',
        'rt'     => 'Rt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }

        return $model;
    }
}

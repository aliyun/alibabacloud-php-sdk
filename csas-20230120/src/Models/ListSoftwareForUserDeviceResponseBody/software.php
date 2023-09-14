<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwareForUserDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class software extends Model
{
    /**
     * @example Alibaba (China) Network Technology Co.,Ltd.
     *
     * @var string
     */
    public $inc;

    /**
     * @example 2023-08-18 02:43:02
     *
     * @var string
     */
    public $installTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'inc'         => 'Inc',
        'installTime' => 'InstallTime',
        'name'        => 'Name',
        'versions'    => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inc) {
            $res['Inc'] = $this->inc;
        }
        if (null !== $this->installTime) {
            $res['InstallTime'] = $this->installTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return software
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Inc'])) {
            $model->inc = $map['Inc'];
        }
        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = $map['Versions'];
            }
        }

        return $model;
    }
}

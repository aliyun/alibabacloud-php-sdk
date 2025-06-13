<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwareForUserDeviceResponseBody;

use AlibabaCloud\Dara\Model;

class software extends Model
{
    /**
     * @var string
     */
    public $inc;

    /**
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
        'inc' => 'Inc',
        'installTime' => 'InstallTime',
        'name' => 'Name',
        'versions' => 'Versions',
    ];

    public function validate()
    {
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->versions = [];
                $n1 = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

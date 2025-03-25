<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListLablesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isDesignated;

    /**
     * @example gray
     *
     * @var string
     */
    public $label;

    /**
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @example 2
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'isDesignated' => 'IsDesignated',
        'label' => 'Label',
        'online' => 'Online',
        'size' => 'Size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDesignated) {
            $res['IsDesignated'] = $this->isDesignated;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['IsDesignated'])) {
            $model->isDesignated = $map['IsDesignated'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

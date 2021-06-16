<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipleineLatestInstanceStatusResponseBody\object;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipleineLatestInstanceStatusResponseBody\object\groups\stages;
use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $name;

    /**
     * @var stages[]
     */
    public $stages;
    protected $_name = [
        'status' => 'Status',
        'name'   => 'Name',
        'stages' => 'Stages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->stages) {
            $res['Stages'] = [];
            if (null !== $this->stages && \is_array($this->stages)) {
                $n = 0;
                foreach ($this->stages as $item) {
                    $res['Stages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Stages'])) {
            if (!empty($map['Stages'])) {
                $model->stages = [];
                $n             = 0;
                foreach ($map['Stages'] as $item) {
                    $model->stages[$n++] = null !== $item ? stages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigRequest;

use AlibabaCloud\Tea\Model;

class configStandardIds extends Model
{
    /**
     * @var int[]
     */
    public $addIds;

    /**
     * @var int[]
     */
    public $removeIds;
    protected $_name = [
        'addIds'    => 'AddIds',
        'removeIds' => 'RemoveIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addIds) {
            $res['AddIds'] = $this->addIds;
        }
        if (null !== $this->removeIds) {
            $res['RemoveIds'] = $this->removeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configStandardIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddIds'])) {
            if (!empty($map['AddIds'])) {
                $model->addIds = $map['AddIds'];
            }
        }
        if (isset($map['RemoveIds'])) {
            if (!empty($map['RemoveIds'])) {
                $model->removeIds = $map['RemoveIds'];
            }
        }

        return $model;
    }
}

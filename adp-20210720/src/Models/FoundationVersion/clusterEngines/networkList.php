<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines;

use AlibabaCloud\Tea\Model;

class networkList extends Model
{
    /**
     * @var string[]
     */
    public $ipFamilies;

    /**
     * @example Calico
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'ipFamilies' => 'ipFamilies',
        'name'       => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipFamilies) {
            $res['ipFamilies'] = $this->ipFamilies;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ipFamilies'])) {
            if (!empty($map['ipFamilies'])) {
                $model->ipFamilies = $map['ipFamilies'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}

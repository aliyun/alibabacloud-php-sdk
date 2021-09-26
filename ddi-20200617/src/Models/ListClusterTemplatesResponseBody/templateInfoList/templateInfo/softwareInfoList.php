<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesResponseBody\templateInfoList\templateInfo;

use AlibabaCloud\Tea\Model;

class softwareInfoList extends Model
{
    /**
     * @var string[]
     */
    public $softwareInfo;
    protected $_name = [
        'softwareInfo' => 'SoftwareInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->softwareInfo) {
            $res['SoftwareInfo'] = $this->softwareInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwareInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SoftwareInfo'])) {
            if (!empty($map['SoftwareInfo'])) {
                $model->softwareInfo = $map['SoftwareInfo'];
            }
        }

        return $model;
    }
}

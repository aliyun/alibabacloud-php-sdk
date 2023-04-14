<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListUserClustersResponseBody\result;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example tst
     *
     * @var string
     */
    public $description;

    /**
     * @example UserCluster
     *
     * @var string
     */
    public $metaType;
    protected $_name = [
        'description' => 'description',
        'metaType'    => 'metaType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->metaType) {
            $res['metaType'] = $this->metaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['metaType'])) {
            $model->metaType = $map['metaType'];
        }

        return $model;
    }
}

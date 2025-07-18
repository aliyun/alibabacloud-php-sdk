<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class OpenStructIdpWuyingSubConfig extends Model
{
    /**
     * @var string[]
     */
    public $aliuids;
    protected $_name = [
        'aliuids' => 'Aliuids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuids) {
            $res['Aliuids'] = $this->aliuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenStructIdpWuyingSubConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliuids'])) {
            if (!empty($map['Aliuids'])) {
                $model->aliuids = $map['Aliuids'];
            }
        }

        return $model;
    }
}

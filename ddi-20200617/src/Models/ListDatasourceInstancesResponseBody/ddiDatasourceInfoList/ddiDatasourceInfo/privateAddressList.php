<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListDatasourceInstancesResponseBody\ddiDatasourceInfoList\ddiDatasourceInfo;

use AlibabaCloud\Tea\Model;

class privateAddressList extends Model
{
    /**
     * @var string[]
     */
    public $privateAddressList;
    protected $_name = [
        'privateAddressList' => 'privateAddressList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateAddressList) {
            $res['privateAddressList'] = $this->privateAddressList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateAddressList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['privateAddressList'])) {
            if (!empty($map['privateAddressList'])) {
                $model->privateAddressList = $map['privateAddressList'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsResponseBody\data\responseData;

use AlibabaCloud\Tea\Model;

class assetInfo extends Model
{
    /**
     * @example suspicious.wbd.wb.trojanpath
     *
     * @var string
     */
    public $key;

    /**
     * @example Trojan Path
     *
     * @var string
     */
    public $keyName;

    /**
     * @example /root/test33.php
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'key'     => 'Key',
        'keyName' => 'KeyName',
        'values'  => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $kibanaPrivateIPWhitelist;

    /**
     * @var string[]
     */
    public $kibanaIPWhitelist;
    protected $_name = [
        'kibanaPrivateIPWhitelist' => 'kibanaPrivateIPWhitelist',
        'kibanaIPWhitelist'        => 'kibanaIPWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kibanaPrivateIPWhitelist) {
            $res['kibanaPrivateIPWhitelist'] = $this->kibanaPrivateIPWhitelist;
        }
        if (null !== $this->kibanaIPWhitelist) {
            $res['kibanaIPWhitelist'] = $this->kibanaIPWhitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['kibanaPrivateIPWhitelist'])) {
            if (!empty($map['kibanaPrivateIPWhitelist'])) {
                $model->kibanaPrivateIPWhitelist = $map['kibanaPrivateIPWhitelist'];
            }
        }
        if (isset($map['kibanaIPWhitelist'])) {
            if (!empty($map['kibanaIPWhitelist'])) {
                $model->kibanaIPWhitelist = $map['kibanaIPWhitelist'];
            }
        }

        return $model;
    }
}

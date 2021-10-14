<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $kibanaIPWhitelist;

    /**
     * @var string[]
     */
    public $kibanaPrivateIPWhitelist;
    protected $_name = [
        'kibanaIPWhitelist'        => 'kibanaIPWhitelist',
        'kibanaPrivateIPWhitelist' => 'kibanaPrivateIPWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kibanaIPWhitelist) {
            $res['kibanaIPWhitelist'] = $this->kibanaIPWhitelist;
        }
        if (null !== $this->kibanaPrivateIPWhitelist) {
            $res['kibanaPrivateIPWhitelist'] = $this->kibanaPrivateIPWhitelist;
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
        if (isset($map['kibanaIPWhitelist'])) {
            if (!empty($map['kibanaIPWhitelist'])) {
                $model->kibanaIPWhitelist = $map['kibanaIPWhitelist'];
            }
        }
        if (isset($map['kibanaPrivateIPWhitelist'])) {
            if (!empty($map['kibanaPrivateIPWhitelist'])) {
                $model->kibanaPrivateIPWhitelist = $map['kibanaPrivateIPWhitelist'];
            }
        }

        return $model;
    }
}

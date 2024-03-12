<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAllowedPrefixHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class allowedPrefixHistoryList extends Model
{
    /**
     * @var string[]
     */
    public $allowedPrefix;

    /**
     * @example 1673751163000
     *
     * @var string
     */
    public $gmtCreate;
    protected $_name = [
        'allowedPrefix' => 'AllowedPrefix',
        'gmtCreate'     => 'GmtCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedPrefix) {
            $res['AllowedPrefix'] = $this->allowedPrefix;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allowedPrefixHistoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedPrefix'])) {
            if (!empty($map['AllowedPrefix'])) {
                $model->allowedPrefix = $map['AllowedPrefix'];
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}

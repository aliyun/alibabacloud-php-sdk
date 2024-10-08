<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CheckSiteNameRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;
    protected $_name = [
        'siteName' => 'SiteName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSiteNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}

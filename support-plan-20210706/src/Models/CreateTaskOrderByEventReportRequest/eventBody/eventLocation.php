<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportRequest\eventBody;

use AlibabaCloud\Tea\Model;

class eventLocation extends Model
{
    /**
     * @description domian域名
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'domain' => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventLocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}

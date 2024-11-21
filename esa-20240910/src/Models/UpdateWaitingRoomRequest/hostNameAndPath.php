<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWaitingRoomRequest;

use AlibabaCloud\Tea\Model;

class hostNameAndPath extends Model
{
    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The probe path.
     *
     * @example /test
     *
     * @var string
     */
    public $path;

    /**
     * @description The subdomain.
     *
     * @example test.
     *
     * @var string
     */
    public $subdomain;
    protected $_name = [
        'domain'    => 'Domain',
        'path'      => 'Path',
        'subdomain' => 'Subdomain',
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
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->subdomain) {
            $res['Subdomain'] = $this->subdomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostNameAndPath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Subdomain'])) {
            $model->subdomain = $map['Subdomain'];
        }

        return $model;
    }
}

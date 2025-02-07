<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomsResponseBody\waitingRooms;

use AlibabaCloud\Dara\Model;

class hostNameAndPath extends Model
{
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $path;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

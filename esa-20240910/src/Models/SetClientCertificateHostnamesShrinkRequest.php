<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetClientCertificateHostnamesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hostnamesShrink;
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'hostnamesShrink' => 'Hostnames',
        'id'              => 'Id',
        'siteId'          => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostnamesShrink) {
            $res['Hostnames'] = $this->hostnamesShrink;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['Hostnames'])) {
            $model->hostnamesShrink = $map['Hostnames'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
